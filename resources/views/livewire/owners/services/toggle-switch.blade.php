<div  class="custom-control custom-switch">
    <input  wire:model.lazy="isActive" type="checkbox"  wire:loading.class.remove="bg-blue" class="custom-control-input" id={{ $serviceID->id }} @if($isActive) checked @endif>
    <label class="custom-control-label" for={{ $serviceID->id }}> </label>
</div>