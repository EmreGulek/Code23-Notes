@extends('panel.layout.app')

@section('content')

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div class="card p-3">
                    <div class="card-header">
                        <h3 class=" py-1 my-1">Kategoriler</h3>
                        <a href='{{route('panel.categoryCreatePage')}}' class="btn btn-sm btn-success">Yeni Kategori Oluştur</a>
                    </div>
                    @if($categories->first())
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif


                            <div class="div">

                                <hr>
                                <div class="table-responsive text-nowrap">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Kategori Adı</th>
                                            <th>Durum</th>
                                            <th>Oluşturulma Tarihi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>

                                        <tbody class="table-border-bottom-0">
                                        @foreach($categories as $category)
                                            <tr id="category-{{ $category->id }}" >
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$category->name}}</strong></td>
                                                <td>
                                                    @if($category->is_active == 1)
                                                        Aktif
                                                    @else
                                                        Pasif
                                                    @endif
                                                </td>
                                                <td>
                                                    {{$category->created_at}}
                                                </td>

                                                <td>
                                                    <a href="{{route('panel.categoryEditPage',$category->id)}}" class="btn btn-outline-info">Güncelle</a>
                                                    <button onclick="deleteCategory({{ $category->id }})" class="btn btn-danger" style="margin-left:10px;">
                                                        Sil
                                                    </button>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @else
                                <div class="card">
                                    <div class="card-header" > <h3 class="mr-3" style="color:red;">Daha önceden oluşturmuş olduğunuz bir kategori bulunmamaktadır.</h3></div>
                                </div>

                            @endif
                        </div>
                </div>
            </h2>
        </x-slot>



    </x-app-layout>



    <script>
        function deleteCategory(categoryId) {
            // Kullanıcıya silme işlemi için onay isteği
            if (!confirm('Bu kategoriyi silmek istediğinize emin misiniz?')) return;

            // URL'yi dinamik hale getir
            var url = "{{ route('panel.categoryDeletePage', ':id') }}";
            url = url.replace(':id', categoryId);

            $.ajax({
                url: url,
                type: 'GET', // Silme işlemi için GET metodunu kullanıyoruz

                success: function (response) {
                    alert(response.message);

                    // Kategori DOM'dan kaldırılıyor
                    $('#category-' + categoryId).remove();
                },
                error: function (xhr, status, error) {
                    console.error('Hata:', error);
                    alert('Silme işlemi başarısız oldu.');
                }
            });
        }
    </script>
@endsection
