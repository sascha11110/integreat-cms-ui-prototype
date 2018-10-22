<div class="flex flex-wrap mb-4">
    <div class="w-2/5 flex flex-wrap flex-col justify-center">
        <h2 class="heading font-normal">
            Neue Seite erstellen
        </h2>
    </div>
    <div class="w-3/5 flex justify-end">
        <button class="bg-grey hover:bg-grey-dark text-white font-bold py-3 px-4 rounded mr-2">
            Speichern
        </button>
        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-3 px-4 rounded">
            Veröffentlichen
        </button>
    </div>
</div>

<div class="flex flex-wrap">
    <div class="w-4/5 pr-2">
        <div class="w-full p-4 mb-4 rounded border border-solid border-grey-light shadow bg-white">
            <input class="appearance-none block w-full bg-grey-lighter text-xl text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Titel hier eingeben" type="text">
            <img src="images/tinymce.png" class="mt-5" />
        </div>
        <div class="w-full p-4 rounded border border-solid border-grey-light shadow bg-white">
            <h3 class="mb-2">Seite anhängen</h3>
            <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded mb-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Seite suchen" />
            <div class="relative my-2">
                <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                    <option>Davor anhängen</option>
                    <option>Danach anhängen</option>
                </select>
                <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
            <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                Seite anhängen
            </button>
        </div>
    </div>
    <div class="w-1/5 pl-2">
        <div class="w-full px-4 py-2 rounded border border-solid border-grey-light shadow bg-white">
            <div class="py-2 border-b solid border-grey-lighter mb-2">
                <label class="font-bold">Aktuelle Sprache</label>
                <div class="relative my-2">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option>Deutsch</option>
                        <option>Englisch</option>
                        <option>...</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="py-2 border-b solid border-grey-lighter mb-2">
                <label class="font-bold mb-2 block">Anordnung</label>
                <small class="text-xs uppercase">Übergeordnete Seite</small>
                <div class="relative my-2">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option>Seite X</option>
                        <option>– Seite Y</option>
                        <option>Seite Z</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <small class="text-xs uppercase">Reihenfolge</small>
                <div class="relative my-2">
                    <input type="number" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded mb-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" value="3" />
                </div>
            </div>
            <div class="py-2 border-b solid border-grey-lighter mb-2">
                <label class="font-bold">Status</label>
                <div class="relative my-2">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option>Entwurf</option>
                        <option>Ausstehender Review</option>
                        <option>Veröffentlicht</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="py-2">
                <label class="font-bold">
                    Icon
                </label>
                <button class="my-2 bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                    Icon festlegen
                </button>
            </div>
        </div>
    </div>
</div>