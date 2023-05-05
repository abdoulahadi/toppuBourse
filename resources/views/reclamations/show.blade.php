@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <h1>Page 2 - Non Admin</h1>
    </section><!-- End Hero -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Détails de la réclamation</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <strong>Objet:</strong>
                </div>
                <div class="col-md-8">
                    {{ $reclamation->objet }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <strong>Message:</strong>
                </div>
                <div class="col-md-8">
                    {{ $reclamation->message }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <strong>Receptionnée:</strong>
                </div>
                <div class="col-md-8">
                    {{ $reclamation->receptionnee ? 'Oui' : 'Non' }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <strong>Acceptée:</strong>
                </div>
                <div class="col-md-8">
                    {{ $reclamation->acceptee ? 'Oui' : 'Non' }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <strong>Refusée:</strong>
                </div>
                <div class="col-md-8">
                    {{ $reclamation->refusee ? 'Oui' : 'Non' }}
                </div>
            </div>
            @if ($reclamation->refusee)
                <div class="row">
                    <div class="col-md-4">
                        <strong>Motif de refus:</strong>
                    </div>
                    <div class="col-md-8">
                        {{ $reclamation->motif_refus }}
                    </div>
                </div>
            @endif
            <div class="row mt-4">
                <div class="col-md-12">
                    <a href="" class="btn btn-secondary mr-2">Retour</a>
                    @if (!$reclamation->refusee && !$reclamation->acceptee)
                        <a href="" class="btn btn-primary mr-2">Modifier</a>
                        <form class="d-inline" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Accepter</button>
                        </form>
                        <form class="d-inline" action="" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Refuser</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
