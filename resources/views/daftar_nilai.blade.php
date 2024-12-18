@php 

$no = 1;
//array scalar
$s1 = ['nama'=>'fawwaz', 'nilai'=> 90];
$s2 = ['nama'=>'Andi', 'nilai'=> 80];
$s3 = ['nama'=>'Ali', 'nilai'=> 70];
$s4 = ['nama'=>'Aji', 'nilai'=> 50];
$s5 = ['nama'=>'Ari', 'nilai'=> 30];
//array assosiative, syarat pemanggilan harus menggunakan looping
$judul = ['No', 'Nama', 'Nilai', 'Keterangan'];
$siswa = [$s1, $s2, $s3, $s4, $s5];
@endphp
<table border="1" align="center" cellpadding="10px" width="70%">
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th>{{$jdl}}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($siswa as $s)
    @php $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';  @endphp
    <tr>
           
            <td>{{$no++}}</td>
            <td>{{$s['nama']}}</td>
            <td>{{$s['nilai']}}</td>
            <td>{{$ket}}</td>
        </tr>
        @endforeach
    </tbody>
</table>