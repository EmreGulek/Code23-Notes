@extends("panel.layout.app")



@section('content')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div class="card">
                    <card class="header">
                        <h4 class="fw-bold my-2 py-2 mx-3">Yeni Kategori Oluştur</h4>
                        <hr>
                    </card>
                    <form action="{{ route('panel.categoryAdd') }}" method="POST" class="card-body">
                        @csrf
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Kategori Adı</label>
                            <input name="category_name" type="text" class="form-control" placeholder="Bir kategori adı giriniz.">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Kategori Durumu</label>
                            <select name="status" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                <option disabled selected>Kategorinin Durumunu Seçiniz</option>
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>
                        <div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </form>
                </div>
            </h2>
        </x-slot>



    </x-app-layout>






@endsection
