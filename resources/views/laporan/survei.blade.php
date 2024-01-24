@extends('layouts.master')
@section('title', 'Laporan Survei')
@section('content')

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Surveis List</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('surveis.import') }}" method="POST" enctype="multipart/form-data" class="mb-3">
        @csrf
        <div class="form-group">
            <label for="excel_file" class="font-weight-bold">Pilih File Excel:</label>
            <div class="custom-file">
                <input type="file" name="excel_file" accept=".xlsx, .csv" class="custom-file-input" id="excel_file" required>
                <label class="custom-file-label" for="excel_file">Pilih file...</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Import</button>
    </form>
    

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Kejujuran, etika pergaulan, keramahan</th>
                    <th>Kemampuan dan menguasai bidang keilmuannya</th>
                    <th>Kemampuan berbahasa asing</th>
                    <th>Kemampuan menggunakan TIK</th>
                    <th>Kemampuan berkomunikasi</th>
                    <th>Kemampuan kerjasama dalam tim</th>
                    <th>Kedisiplinan</th>
                    <th>Rasa percaya diri</th>
                    <th>Rasa tanggungjawab</th>
                    <th>Kemampuan menyampaikan ide</th>
                    <th>Keunggulan alumni UNIB</th>
                    <th>Kelemahan/kekurangan alumni UNIB</th>
                    <th>Kualitas alumni UNIB</th>
                    <th>Kompetensi penting untuk alumni UNIB</th>
                    <th>Saran pemantapan kompetensi alumni UNIB</th>
                    <th>Saran terhadap lembaga UNIB</th>
                </tr>
            </thead>
            <tfoot class="text-center">
                <tr>
                    <th>#</th>
                    <th>Timestamp</th>
                    <th>Program Studi</th>
                    <th>Kejujuran, etika pergaulan, keramahan</th>
                    <th>Kemampuan dan menguasai bidang keilmuannya</th>
                    <th>Kemampuan berbahasa asing</th>
                    <th>Kemampuan menggunakan TIK</th>
                    <th>Kemampuan berkomunikasi</th>
                    <th>Kemampuan kerjasama dalam tim</th>
                    <th>Kedisiplinan</th>
                    <th>Rasa percaya diri</th>
                    <th>Rasa tanggungjawab</th>
                    <th>Kemampuan menyampaikan ide</th>
                    <th>Keunggulan alumni UNIB</th>
                    <th>Kelemahan/kekurangan alumni UNIB</th>
                    <th>Kualitas alumni UNIB</th>
                    <th>Kompetensi penting untuk alumni UNIB</th>
                    <th>Saran pemantapan kompetensi alumni UNIB</th>
                    <th>Saran terhadap lembaga UNIB</th>
                </tr>
            </tfoot>
            
            <tbody>
                @foreach($surveis as $survei)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $survei->timestamp }}</td>
                        <td>{{ $survei->program_studi }}</td>
                        <td>{{ $survei->kejujuran_etika }}</td>
                        <td>{{ $survei->kemampuan_bidang_keilmuan }}</td>
                        <td>{{ $survei->kemampuan_bahasa_asing }}</td>
                        <td>{{ $survei->kemampuan_teknologi_informasi }}</td>
                        <td>{{ $survei->kemampuan_berkomunikasi }}</td>
                        <td>{{ $survei->kemampuan_kerjasama_tim }}</td>
                        <td>{{ $survei->kedisiplinan }}</td>
                        <td>{{ $survei->kepercayaan_diri }}</td>
                        <td>{{ $survei->rasa_tanggungjawab }}</td>
                        <td>{{ $survei->kemampuan_menyampaikan_ide }}</td>
                        <td>{{ $survei->keunggulan_alumni }}</td>
                        <td>{{ $survei->kelemahan_alumni }}</td>
                        <td>{{ $survei->kualitas_alumni }}</td>
                        <td>{{ $survei->kompetensi_penting }}</td>
                        <td>{{ $survei->saran_pemantapan_kompetensi }}</td>
                        <td>{{ $survei->saran_lembaga_unib }}</td>
                    </tr>
                @endforeach
            </tbody>
        {{-- </table> --}}
    </div>
</div>

@endsection

