
<!-- se o botão for apertado uma vez esta view será gerada -->
<div class="flex justify-center items-center flex flex-row border-2 border-black p-6">
  <div
    class="mb-4 rounded-lg bg-[#86efac] py-4 px-6 text-black font-bold mr-6"
    role="alert">
    SUCCESSFULLY GENERATED YOUR QR CODE AND VIRTUAL CARD!<br>
    JUST ACCESS THIS SAME PAGE ON YOUR MOBILE PHONE
  </div>

  <!-- Imagem do QR Code gerada pelo "simple-qrcode", exibido apenas em dispositivos móveis.
  Quando scanneado leva para a página /john, que contém o card apresentando ele -->
  <div class="visible-print text-center">
    {!! QrCode::size(200)->generate(route('john')); !!}
  </div>
</div>