@extends('template')
@section('conteudo')
<p>
  A mais nova web rádio carioca!
</p>
<p>
  Música eletrônica, sets mixados, downloads e muito mais!
</p>
<div class="btn_rioelectro_play" style="display:none">
  Vem curtir, dá um
  <button type="button" class="btn btn-secondary btn-lg">&#9654;&#9654;PLAY</button>
</div>
<p>
  Outros links: ouça em seu player favorito!

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Opção</th>
      <th scope="col">Tipo</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Direto</td>
      <td>https://stream.zeno.fm/v9kshgmmb2zuv</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>m3u</td>
      <td>https://stream.zeno.fm/v9kshgmmb2zuv.m3u</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>pls</td>
      <td>https://stream.zeno.fm/v9kshgmmb2zuv.pls</td>
    </tr>
  </tbody>
</table>
</p>
@endsection
@section('js')
<script src="{{ asset('js/sms.class.js') }}"></script>
<script src="{{ asset('js/sms.js') }}"></script>
@endsection
