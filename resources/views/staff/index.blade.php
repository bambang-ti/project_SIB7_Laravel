@extends('layout.app')
@section('konten')
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.2/css/buttons.dataTables.css"> -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
    href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
     <div class="card shadow mb-4">
                <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
               </div>
                    <div class="card-body">
                 <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </tfoot>
        <tbody>
            @php $no=1; @endphp
            @foreach($staff as $s)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$s->nip}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->alamat}}</td>
                <td>{{$s->email}}</td>
            </tr>
            @endforeach
            </tbody>
    </table>

</div>
</div>
</div>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#dataTable', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        }
    }
});
    </script> -->

@endsection