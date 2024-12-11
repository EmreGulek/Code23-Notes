@extends("panel.layout.app")



@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Blog Gönderisi Oluştur</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route("noteCreate")}}" method="post">
                            @csrf
                        <div>
                            <label for="defaultFormControlInput" class="form-label">Başlık</label>
                            <input name="title" type="text" class="form-control"  placeholder="Bir başlık giriniz." >
                        </div>
                            <div class="mt-2">
                                <label for="exampleFormControlTextarea1" class="form-label">İçerik</label>
                                <textarea name="content" class="form-control"  rows="3" placeholder="Bir içerik giriniz."></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-2">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection
