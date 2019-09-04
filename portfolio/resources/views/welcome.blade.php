@extends('templates.app')
@section('cache')

  <div class="cache">
    <div class="bonjour">
      Bonjour
    </div>
    <a id="mesProjets" href="{{ route('projets') }}">voir mes projets</a>
  </div>

 @stop
