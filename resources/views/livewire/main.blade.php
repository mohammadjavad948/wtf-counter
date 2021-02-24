<div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
    @foreach($counters as $counter)
        <livewire:counter :counter="$counter" :key="$counter->id"/>
    @endforeach

    <div class="myCard" key="hehe boiii">
        <h4>new</h4>
        <div class="input-group mb-3 w-75">
            <input type="text" class="form-control" placeholder="name" wire:model.differ="count.name">
        </div>
        <div style="display: flex; gap: 10px;">
            <button
                wire:click="save"
                class="button blue"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus"
                     viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
            </button>
        </div>

    </div>

</div>
