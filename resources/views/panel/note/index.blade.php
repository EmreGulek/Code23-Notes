@extends("panel.layout.app")



@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div class="card">
                    <h5 class="card-header">Not Listesi</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Not</th>
                                <th>Note Durumu</th>
                                <th>Planlanan Zaman</th>
                                <th>İşlemler</th>

                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @foreach($notes as  $note)
                                <tr id="note-{{ $note->id }}">
                                    @foreach($categories as $cat)
                                        @if($cat->id == $note->category_id)
                                            <td>{{$cat->name}}</td>
                                        @endif
                                    @endforeach
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$note->content}}</strong></td>
                                    <td>
                                        @if($note->status == 0) <span class="badge bg-label-primary me-1" style="color:darkred">Yapılmadı</span>
                                        @elseif($note->status ==1) <span class="badge bg-label-dark me-1" style="color:royalblue">Yapılıyor</span>
                                        @elseif($note->status ==2) <span class="badge bg-label-secondary me-1" style="color:darkorange">Yapılacak</span>
                                        @elseif($note->status ==3) <span class="badge bg-label-danger me-1">İptal Edildi</span>
                                        @elseif($note->status ==4) <span class="badge bg-label-success me-1">Ertelendi</span>
                                        @endif
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ \Carbon\Carbon::parse($note->deadline)->diffForHumans() }}</strong>
                                    </td>

                                    <td>
                                        <div class="">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item btn btn-primary m-2" style="width: 100px; " href="{{route('note.edit',$note->id)}}">Düzenle</a>
                                                <button onclick="noteDelete({{ $note->id }})"  class="btn btn-danger dropdown-item m-2" style="width: 100px;">
                                                    Sil
                                                </button>

                                            </div>
                                        </div>
                                    </td>
                                </tr>  @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </h2>
        </x-slot>



    </x-app-layout>


      <script>
          function noteDelete(noteId) {

              // Kullanıcıya silme işlemi için onay isteği
              if (!confirm('Bu notu silmek istediğinize emin misiniz?')) return;

              // URL'yi dinamik hale getir
              var url = "{{ route('note.delete', ':id') }}";
              url = url.replace(':id', noteId);

              // AJAX isteği gönder
              $.ajax({
                  url: url,
                  type: 'GET', // Silme işlemi için GET metodunu kullanıyoruz

                  success: function (response) {
                      alert(response.message);

                      // Kategori DOM'dan kaldırılıyor
                      $('#note-' + noteId).remove();
                  },
                  error: function (xhr, status, error) {
                      console.error('Hata:', error);
                      alert('Silme işlemi başarısız oldu.');
                  }
              });
          }
      </script>


@endsection
