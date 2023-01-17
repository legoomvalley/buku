@extends(backpack_view('blank'))
@section('content')
<html>

<head>
    <meta charset="utf-8">
    <title>Book QR Code</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('http://buku.test/admin/book/'.$data['no'].'/show') !!}
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('http://buku.test/admin/book/'.$data['no'].'/show') !!}
            </div>
        </div>

    </div>

    <button id="button-tf" onclick="myfun()"> Print Page </button>
    <script type="text/javascript">
        function myfun(){
            window.print();
        }
    </script>

    <a href= "{{ url()->previous() }}" class="button" > Back</a>
    
</body>

@endsection