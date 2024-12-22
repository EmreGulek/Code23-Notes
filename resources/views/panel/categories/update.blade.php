@extends('panel.layout.app')

@section('content')




    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div class="card">
                    <div class="card-header">
                        <h3>Kategori Güncelleme</h3>
                        <hr class="mt-2">
                    </div>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach

                    <form action="{{ route('panel.categoryUpdatePage') }}" method="POST" class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label" >Kategori Adı</label>
                            <input name="category_name" type="text" class="form-control" placeholder="Bir kategori adı giriniz." value="{{$category->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori Durumu</label>
                            <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                @if($category->is_active)
                                    <option value="1" selected>Aktif</option>
                                    <option value="0">Pasif</option>
                                @else
                                    <option value="1" >Aktif</option>
                                    <option value="0" selected>Pasif</option>
                                @endif
                            </select>
                        </div>
                        <input type="hidden" name="category_id" value="{{$category->id}}">
                        <div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                        </div>
                    </form>
                </div>
            </h2>
        </x-slot>



    </x-app-layout>


@endsection
