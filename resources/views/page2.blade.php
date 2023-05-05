@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <h1>Page 2 - Non Admin</h1>
    </section><!-- End Hero -->
    <div class="container" style="margin-top: 100px; margin-bottom: 20px">
  
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Mes réclamations</div>
                        <div class="card-body">
                            @if ($reclamations->isEmpty())
                                <p>Aucune réclamation pour le moment.</p>
                            @else
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Objet</th>
                                            <th>Receptionnée</th>
                                            <th>Acceptée</th>
                                            <th>Refusée</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reclamations as $reclamation)
                                            <tr>
                                                <td>{{ $reclamation->objet }}</td>
                                                <td>{{ $reclamation->receptionnee ? 'Oui' : 'Non' }}</td>
                                                <td>{{ $reclamation->acceptee ? 'Oui' : 'Non' }}</td>
                                                <td>{{ $reclamation->refusee ? 'Oui' : 'Non' }}</td>
                                                <td>
                                                    <a href="{{ route('reclamations.show', $reclamation->id) }}" class="btn btn-primary">Voir</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Demande de Bourse') }}</div>
    
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Liste des demandes de Bourse') }}</div>
    
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
