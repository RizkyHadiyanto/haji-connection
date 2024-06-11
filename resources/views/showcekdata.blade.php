<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cek Data Nasabah Haji</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon2.png" rel="icon">
    <link href="assets/img/apple-touch-icon2.png" rel="apple-touch-icon">

    <!-- Lineicon -->
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
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
        <div class="data-columns" id="dataColumns">
            <!-- Data columns will be appended here by JavaScript -->
        </div>

    </div>
    <div class="container">
        <h1> {{ $data->nama }}</h1>
        <div class="data-columns">
            <div class="data-column">
                <h2>Data ke-{{ $data->kid }}</h2>
                <p><strong>Address :</strong>{{ $data->address }} </p>
                <p><strong>Email :</strong>{{ $data->email }} </p>
                <p><strong>Bank Account :</strong>{{ $data->bankaccount }}</p>
                <p><strong>Bank ID :</strong>{{ $data->bankid }}</p>
                <p><strong>Birthdate :</strong>{{ \Carbon\Carbon::parse($data->birthdate)->format('d-m-Y') }}</p>
                <p><strong>Birthplace :</strong>{{ $data->birthplace }}</p>
                <p><strong>City :</strong><span class="city-id">{{ $data->city->name }}</span></p>
                <p><strong>District :</strong>{{ $data->district }}</p>
                <p><strong>Education :</strong>{{ $data->education->nameeducation }}</p>
                <p><strong>ID :</strong>{{ $data->id }}</p>
                <p><strong>Is Regular :</strong>{{ $data->is_regular }}</p>
                <p><strong>Job :</strong><span class="city-id">{{ $data->job->namejob }}</span></p>
                <p><strong>Jumlah Setor :</strong>Rp{{ number_format($data->jumlah_setor, 0, ',', '.') }}</p>
                <p><strong>Mobile Phone :</strong>{{ $data->mobilephone }}</p>
                <p><strong>Nama :</strong>{{ $data->nama }} </p>
                <p><strong>Nama Ayah:</strong>{{ $data->nama_ayah }}</p>
                <p><strong>NIK :</strong>{{ $data->nik }}</p>
                <p><strong>No Validation :</strong>{{ $data->no_validation }}</p>
                <p><strong>PDF File Wakalah :</strong>{{ $data->pdf_file_Wakalah }}</p>
                <p><strong>Register Date :</strong>{{ $data->registerdate }}</p>
                <p><strong>Sex :</strong>{{ $data->sex }}</p>
                <p><strong>Subdistrict :</strong>{{ $data->subdistrict }}</p>
                <p><strong>Tgl Data Terproses :</strong>{{ $data->tgl_data_terproses }}</p>
                <p><strong>ZIP :</strong>{{ $data->zip }}</p>
            </div>
            <a href="/nasabah" class="btn btn-secondary">Kembali</a>
        </div>
</body>

</html>
