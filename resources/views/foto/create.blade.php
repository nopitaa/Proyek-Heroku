@extends('layouts.app') 
@section('title', 'Novita | Data Contact') 
@section('content') 
<div class="main-content"> 
    <div class="section__content section__content--p30"> 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-md-12"> 
                    <div class="overview-wrap"> 
                        <h2 class="title-1">Insert My Project Data</h2> 
                        
                    </div> 
                </div> 
                </div> 
            </div> 
                    <div class="col-md-12"> 
                        <div class="card-body"> 
                            <form action="{{ route('myprojects.store') }}" method="POST" enctype="multipart/form-data"> 
                            
                                @csrf 
                                <div class="form-group"> 
                                    <label class="font-weight-bold">GAMBAR</label> 
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"> 
                                
                                    <!-- error message untuk title --> 
                                    @error('image') 
                                        <div class="alert alert-danger mt-2"> 
                                            {{ $message }} 
                                        </div> 
                                    @enderror 
                                </div> 
    
                                <div class="form-group"> 
                                    <label class="font-weight-bold">JUDUL </label> 
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Gambar"> 
                                
                                </div> 
    
                                <div class="form-group"> 
                                    <label class="font-weight-bold">DESKRIPSI </label> 
                                    <input type="text" class="form-control" name="content" value="{{ old('content') }}" placeholder="Masukkan Deskripsi Gambar"> 

                                </div> 
    
                                <button type="submit" class="btn btn-md btn-success">Save</button> 
    
                            </form>  
                        </div> 

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