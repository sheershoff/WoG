<div style=" height: inherit; " class="dash-unit">
    <dtitle>Инвентарь</dtitle>
    <hr>
    <div class="Inventory">
        @foreach ($inventary as $val)
        <div class="InventoryItem">
            <div style=" padding-top: 15px; " class="info-user">
                <span aria-hidden="true" class="li_news fs2">{{$val->name}}</span>
            </div>
        </div>
        @endforeach
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
        <div class="InventoryItem"></div>
    </div>

    {{--       			<div class="text">
      				<p><b>Alvarez.is:</b> A beautiful new Dashboard theme has been realised by Carlos Alvarez. Please, visit <a href="http://alvarez.is">Alvarez.is</a> for more details.</p>
      				<p><grey>Last Update: 5 minutes ago.</grey></p>
      			</div> --}}
</div>
