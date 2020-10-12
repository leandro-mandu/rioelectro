@extends('template')
@section('conteudo')
<p>
  A mais nova web rádio carioca!
</p>
<p>
  Música eletrônica, sets mixados, downloads e muito mais!
</p>
<h2>Novidade!</h2>
<p>
  Podcast EXCLUSIVO de lançamento da Rio Electro Web Rádio!<br>
  Aumente o volume e dá um play no player abaixo!!!
</p>

<iframe width="100%" height="60" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&mini=1&feed=%2Fleandropr%2Fpodcast-rio-electro-1-by-leandro-pr%2F" frameborder="0" ></iframe>
<hr>
<p>
  Ou então vem curtir nossa transmissão ao vivo!
</p>

<div class="btn_rioelectro_play" style="display:none">
  Vem curtir, dá um
  <button type="button" class="btn btn-secondary btn-lg">&#9654;&#9654;PLAY</button>
</div>
@endsection
@section('js')
<script src="{{ asset('js/sms.class.js') }}"></script>
<script src="{{ asset('js/sms.js') }}"></script>
@endsection
