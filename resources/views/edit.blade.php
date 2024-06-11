<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">
    <link href="assets/img/apple-touch-icon2.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 5px 50px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .data-columns {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .data-column {
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .data-column h2 {
            margin-top: 0;
        }

        .data-column p {
            margin: 5px 0;
            font-size: 14px;
        }

        .data-column p strong {
            display: inline-block;
            width: 150px;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #00a39d;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .btn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .button.icon {
            background: url(gmail-icon.png) no-repeat;
            float: left;
            width: 10px;
            height: 40px;
        }

        .form-field strong {
            display: inline-block;
            width: 150px;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <h1>Data Nasabah Haji</h1>
    </div>
    <div class="container">
        <h1>{{ $data->nama }}</h1>
        <div class="data-columns">
            <div class="data-column">
                <h2>Data ke-{{ $data->kid }}</h2>
                <p><strong>Address:</strong>{{ $data->address }} </p>
                {{-- harus di edit emailnya --}}
                <p><strong>Email :</strong>{{ $data->email }} </p>
                <p><strong>Bank Account:</strong>{{ $data->bankaccount }}</p>
                <p><strong>Bank ID:</strong>{{ $data->bankid }}</p>
                <p><strong>Birthdate:</strong>{{ $data->birthdate }}</p>
                <p><strong>Birthplace:</strong>{{ $data->birthplace }}</p>
                <p><strong>City ID:</strong><span class="city-id">{{ $data->city->name }}</span></p>
                <p><strong>District:</strong>{{ $data->district }}</p>
                <p><strong>Education ID:</strong>{{ $data->education->nameeducation }}</p>
                <p><strong>ID:</strong>{{ $data->id }}</p>
                <p><strong>Is Regular:</strong>{{ $data->is_regular }}</p>
                <p><strong>Job ID:</strong><span class="city-id">{{ $data->job->namejob }}</span></p>
                <p><strong>Jumlah Setor:</strong>{{ $data->jumlah_setor }}</p>
                <p><strong>Mobile Phone:</strong>{{ $data->mobilephone }}</p>
                <p><strong>Nama:</strong>{{ $data->nama }} </p>
                <p><strong>Nama Ayah:</strong>{{ $data->nama_ayah }}</p>
                <p><strong>NIK:</strong>{{ $data->nik }}</p>
                <p><strong>No Validation:</strong>{{ $data->no_validation }}</p>
                <p><strong>PDF File Wakalah:</strong>{{ $data->pdf_file_Wakalah }}</p>
                <p><strong>Register Date:</strong>{{ $data->registerdate }}</p>
                <p><strong>Sex:</strong>{{ $data->sex }}</p>
                <p><strong>Status Stamping:</strong>{{ $data->status_stamping }}</p>
                <p><strong>Subdistrict:</strong>{{ $data->subdistrict }}</p>
                <p><strong>Tgl Data Terproses:</strong>{{ $data->tgl_data_terproses }}</p>
                <p><strong>ZIP:</strong>{{ $data->zip }}</p>
                <p><strong>Message ID:</strong>{{ $data->message_id }}</p>
                <p><strong>Serial Number:</strong>{{ $data->serial_number }}</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('nasabah.update', ['id' => $data->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $data->email) }}">
                    {{-- <button name="submit" type="submit"
                        class="form-control btn btn-primary rounded submit px-3">update</button> --}}

                    <div class="btn-container">
                        <button class="btn" id="kirimUlangBtn">Kirim Ulang Email</button>
                        <button name="submit" type="submit"
                            class="form-control btn btn-primary rounded submit px-3">Save</button>
                    </div>
                </form>
            </div>
            <a href="/nasabah" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>

</html>
