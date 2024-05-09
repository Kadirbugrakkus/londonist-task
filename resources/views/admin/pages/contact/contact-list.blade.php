@extends('admin._layouts.dashboard.master')
@push('title', 'Contact List')
@section('content')
    <div class="card">
        <div class="card-body p-0 table-striped table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Ad Soyad</th>
                    <th>İkamet</th>
                    <th>İletişim</th>
                    <th>Randevu Tarihi</th>
                    <th>Bütçe Aralığı</th>
                    <th>Oda Sayısı</th>
                    <th>Oluşturulma Tarihi</th>
                    <th>Atanan Yetkili</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody class="w-100">
                @foreach( $contacts as $key => $contact)
                    @if( $contact->id == null )
                        @continue
                    @endif
                    <tr>
                        <td> {{$key + 1 }}</td>
                        <td> {{$contact->first_name}} {{ $contact->last_name }}</td>
                        <td> {{$contact->country->name}}</td>
                        <td> {{$contact->phone}}</td>
                        <td> {{$contact->meeting_date->format('d-m-Y') }}</td>
                        <td> {{$contact->budget}}</td>
                        <td> {{$contact->bedrooms_count}}</td>
                        <td> {{$contact->created_at}}</td>
                        <td>
                            @if($contact->designation_id == null)
                                Atanmadı
                            @else
                                {{ $contact->designation->name }}
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.contact.show', $contact->id)  }}"
                                   class="btn btn-primary btn-sm mr-2">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-primary btn-sm mr-2 sendApiRequest" id="sendApiRequest"
                                   data-id="{{ $contact->id }}" data-email="{{ $contact->email ?? 'null' }}">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <form id="deleteForm" action="{{ route('admin.contact.destroy', $contact->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button form="deleteForm" type="submit" class="btn btn-danger blacklist btn-sm mr-2"
                                        data-id="">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('.sendApiRequest').click('click', function (event) {
            event.preventDefault();
            const contactId = $(this).attr('data-id');
            const contactEmail = $(this).attr('data-email');

            if (contactEmail === null || contactEmail === 'null') {
                Swal.fire({
                    title: 'Hata!',
                    text: 'Geçerli bir e-posta adresi bulunamadı.',
                    icon: 'error',
                    confirmButtonText: 'Tamam'
                });
                return;
            }

            axios.post('/api/send-email', {
                id: contactId
            }, {
                withCredentials: true,
            })
                .then(function (response) {
                    if (response.data.error) {
                        Swal.fire({
                            title: 'Hata!',
                            text: response.data.error,
                            icon: 'error',
                            confirmButtonText: 'Tamam'
                        });
                    } else {
                        Swal.fire({
                            title: 'Başarılı!',
                            text: 'E-posta başarıyla gönderildi.',
                            icon: 'success',
                            confirmButtonText: 'Tamam'
                        });
                    }
                })
                .catch(function (error) {
                    console.error('Error:', error);
                    Swal.fire({
                        title: 'Hata!',
                        text: 'E-posta gönderilirken bir hata oluştu.',
                        icon: 'error',
                        confirmButtonText: 'Tamam'
                    });
                });
        });
        // document.querySelectorAll('.sendApiRequest').addEventListener('click', function (event) {
        //     event.preventDefault();
        //     alert('test')
        //     const contactId = event.target.getAttribute('data-id');
        //     const contactEmail = event.target.getAttribute('data-email');
        //
        //     console.log(event.target)
        //     console.log(contactId, contactEmail)
        //     if (!contactEmail || contactEmail === 0) {
        //         Swal.fire({
        //             title: 'Hata!',
        //             text: 'Geçerli bir e-posta adresi bulunamadı.',
        //             icon: 'error',
        //             confirmButtonText: 'Tamam'
        //         });
        //         return;
        //     }
        //
        //     axios.post('/api/send-email', {
        //         id: contactId
        //     }, {
        //         withCredentials: true,
        //     })
        //         .then(function (response) {
        //             if (response.data.error) {
        //                 Swal.fire({
        //                     title: 'Hata!',
        //                     text: response.data.error,
        //                     icon: 'error',
        //                     confirmButtonText: 'Tamam'
        //                 });
        //             } else {
        //                 Swal.fire({
        //                     title: 'Başarılı!',
        //                     text: 'E-posta başarıyla gönderildi.',
        //                     icon: 'success',
        //                     confirmButtonText: 'Tamam'
        //                 });
        //             }
        //         })
        //         .catch(function (error) {
        //             console.error('Error:', error);
        //             Swal.fire({
        //                 title: 'Hata!',
        //                 text: 'E-posta gönderilirken bir hata oluştu.',
        //                 icon: 'error',
        //                 confirmButtonText: 'Tamam'
        //             });
        //         });
        // });
    </script>
@endpush
