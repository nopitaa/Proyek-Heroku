@extends('layouts.app') 
@section('title', 'Novita | Data Contact') 
@section('content') 
<div class="main-content"> 
    <div class="section__content section__content--p30"> 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="overview-wrap"> 
                        <h2 class="title-1">Data Project</h2> 
                    </div> 
                </div> 
                </div> 
            </div> 
                    <div class="col-md-12"> 
                        <!-- DATA TABLE--> 
                            <a href="{{ route('myprojects.create') }}" class="btn btn-md btn-primary mb-3">Insert Image</a> 
                        <div class="table-responsive m-b-40"> 
                            <table class="table table-borderless table-data3"> 
                                <thead> 
                                    <tr> 
                                        <th>Gambar</th> 
                                        <th>Judul</th> 
                                        <th>Deskripsi</th> 
                                        <th>Aksi</th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    @forelse ($fotos as $Image) 
                                    <tr> 
                                            <td><img src= {{asset('fotoup/'.$Image->image)}} class="rounded" style="width: 150px"> 
                                            </td> 
                                            <td>{{ $Image->title }}</td> 
                                            <td>{!! $Image->content !!}</td> 
                                            <td class="text-center"> 
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('myprojects.destroy', $Image->id) }}" method="POST"> 
                                                    <a href="{{ route('myprojects.edit', $Image->id) }}"<i class="fas fa-edit"></i></a> |  
                                                    @csrf 
                                                    @method('DELETE') 
                                                    <button type="submit"  style="color:red"><i class="fas fa-trash"></i></button> 
                                                </form> 
                                            </td> 
                                        </tr>  
                                        @empty   
                                        <div class="alert alert-danger"> 
                                            Data Image belum Tersedia. 
                                        </div> 
                                    @endforelse                                   
                                </tbody> 
                            </table> 
                            {{ $fotos->links() }} 
                        </div> 
                        <!-- END DATA TABLE--> 
                    </div> 
                </div> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="copyright"> 
                        <p>Copyright © 2022 Nopi. All rights reserved. </p> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection