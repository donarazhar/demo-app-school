<x-filament-panels::page>
    @if ($this->hasInfolist())
        {{ $this->infolist }}
        <div id="qrcode" style="width: 300px; height: 300px; margin-top: 10px"></div>
    @else
        {{ $this->form }}
    @endif
</x-filament-panels::page>
<script src="{{ asset('js/qrcode.js') }}"></script>
<script>
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width: 128,
        height: 128,
    });

    function makeCode() {
        var elText = {{ $getRecord()->nis }};
        qrcode.makeCode(elText);
    }
    makeCode();
</script>
