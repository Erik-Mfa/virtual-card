<div class="visible-print text-center">
    {!! QrCode::size(100)->generate(route('john')); !!}
    <p>Scan me to return to the original page.</p>
</div>