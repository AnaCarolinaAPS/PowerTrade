@extends('layouts.teste')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Paquetes Pendientes') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        {{-- <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody> --}}
                            <tr>
                                <th scope="row">TBA153811428601</th>
                                <td>1,2 kgs (aprox.)</td>
                                <td>En Miami</td>
                            </tr>
                            <tr>
                                <th scope="row">1Z636RV40322634112</th>
                                <td>0,4 kgs (aprox.)</td>
                                <td>En Aduana</td>
                            </tr>
                            <tr>
                                <th scope="row">950192697745</th>
                                <td>1,4 kgs</td>
                                <td>Disponible</td>
                            </tr>
                            {{-- <tr>
                                <th scope="row">950192697745</th>
                                <td>1,4 kgs</td>
                                <td>Retirado</td>
                            </tr> --}}
                        </tbody>
                    </table>

                    {{-- {{ __('TBA153811428601') }}
                    {{ __('1Z636RV40322634112') }}
                    {{ __('950192697745') }} --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Ultimos Pagos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
