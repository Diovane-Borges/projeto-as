<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full text-blue-800" :value="old('name', $creature?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="species" :value="__('Species')"/>
        <x-text-input id="species" name="species" type="text" class="mt-1 block w-full text-blue-800" :value="old('species', $creature?->species)" autocomplete="species" placeholder="Species"/>
        <x-input-error class="mt-2" :messages="$errors->get('species')"/>
    </div>
    <div>
        <x-input-label for="age" :value="__('Age')"/>
        <x-text-input id="age" name="age" type="text" class="mt-1 block w-full text-blue-800" :value="old('age', $creature?->age)" autocomplete="age" placeholder="Age"/>
        <x-input-error class="mt-2" :messages="$errors->get('age')"/>
    </div>
    <div>
        <x-input-label for="habitat" :value="__('Habitat')"/>
        <x-text-input id="habitat" name="habitat" type="text" class="mt-1 block w-full text-blue-800" :value="old('habitat', $creature?->habitat)" autocomplete="habitat" placeholder="Habitat"/>
        <x-input-error class="mt-2" :messages="$errors->get('habitat')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>