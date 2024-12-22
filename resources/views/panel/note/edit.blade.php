@extends("panel.layout.app")



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Notunuzu Düzenleyin</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('note.update')}}" method="POST">
                            @csrf
                            <div>
                                <label for="exampleFormControlSelect1" class="form-label">Kategori Seçimi</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option disabled selected>Lütfen Kategorinizi Seçin</option>
                                    @foreach($categories as $cat)
                                        <option @if($cat->id == $note->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlTextarea1" class="form-label">İçerik</label>
                                <textarea name="content" class="form-control"  rows="3" placeholder="Bir içerik giriniz.">{{ $note->content }}</textarea>
                            </div>
                            <div class="mt-3">
                                <label for="exampleFormControlSelect1" class="form-label">Durum</label>
                                <select class="form-select" name="status" id="exampleFormControlSelect1" aria-label="Default select example">
                                    <option disabled >Lütfen Seçim Yapınız</option>
                                    <option @if($note->status == 0) selected @endif value="0">Yapılmadı</option>
                                    <option @if($note->status == 1) selected @endif value="1">Yapılıyor</option>
                                    <option @if($note->status == 2) selected @endif value="2">Yapılacak</option>
                                    <option @if($note->status == 3) selected @endif value="3">İptal Edildi</option>
                                    <option @if($note->status == 4) selected @endif value="4">Ertelendi</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Planlanan Tarih</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="datetime-local" name="deadline" value="{{$note->deadline}}" id="html5-datetime-local-input">
                                </div>
                            </div>
                            <div>
                                <input type="hidden" name="note_id" value="{{$note->id}}">
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
        </div>
    </div>
@endsection
