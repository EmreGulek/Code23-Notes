@extends("panel.layout.app")



@section('content')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <card class="header">
                            <h4 class="fw-bold my-2 py-2 mx-3">Not Oluştur</h4>
                            <hr>
                        </card>
                        <div class="card-body">
                            <form action="{{route('note.add')}}" method="POST">
                                @csrf
                                <div>
                                    <label for="exampleFormControlSelect1" class="form-label">Kategori Seçimi</label>
                                    <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option disabled selected>Lütfen Kategorinizi Seçin</option>
                                        @foreach($categories as $cat)
                                            @if($cat->is_active == 1)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">İçerik</label>
                                    <textarea name="content" class="form-control"  rows="3" placeholder="Bir içerik giriniz."></textarea>
                                </div>
                                <div class="mt-3">
                                    <label for="exampleFormControlSelect1" class="form-label">Durum</label>
                                    <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option disabled selected>Lütfen Seçim Yapınız</option>
                                        <option value="0">Yapılmadı</option>
                                        <option value="1">Yapılıyor</option>
                                        <option value="2">Yapılacak</option>
                                        <option value="3">İptal Edildi</option>
                                        <option value="4">Ertelendi</option>

                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Planlanan Tarih</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="datetime-local" name="deadline"  id="html5-datetime-local-input">
                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary mt-2">Gönder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </h2>
        </x-slot>



    </x-app-layout>


@endsection

