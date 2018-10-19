<div class="mb-12 text-teal-dark">
    <ul class="mt-4">
        <li>ist "Veranstaltung duplizieren" relevant?</li>
        <li>sind "Veranstaltungsschlagworte" relevant?</li>
        <li>ist das "Beitragsbild" relevant?</li>
        <li>geplante Veröffentlichung relevant?</li>
        <li>ist die Angabe der Zeitzone relevant?</li>
        <li>wie werden wiederkehrende Veranstaltungen derzeit angelegt?</li>
    </ul>
</div>

<div class="flex flex-wrap mb-4">
    <div class="w-2/5 flex flex-wrap flex-col justify-center">
        <h2 class="heading font-normal">
            Neue Veranstaltung anlegen
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
        <div class="w-full p-4 rounded border border-solid border-grey-light shadow bg-white">
            <input class="appearance-none block w-full bg-grey-lighter text-xl text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Titel hier eingeben" type="text">
            <img src="images/tinymce.png" class="mt-5" />
        </div>
        <div class="flex flex-wrap mt-3">
            <div class="w-full md:w-1/2 md:pr-2">
                <div class="w-full p-4 mt-2 rounded border border-solid border-grey-light shadow bg-white">
                    <h3 class="font-bold mb-3">Wann</h3>
                    <span class="text-teal-dark block mb-2">Wiederkehrende Events?</span>
                    <label class="mb-2 block font-bold uppercase text-sm">Datum</label>
                    <div class="flex flex-wrap">
                        <div class="w-1/2 pr-2">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Startdatum">
                        </div>
                        <div class="w-1/2 pr-2">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Enddatum">
                        </div>
                    </div>
                    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Uhrzeit</label>
                    <div class="flex flex-wrap mb-3">
                        <div class="w-1/2 pr-2">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Start">
                        </div>
                        <div class="w-1/2 pr-2">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Ende">
                        </div>
                    </div>
                    <div class="checkbox-wrap relative mt-2 pl-5" style="padding-top:2px;padding-bottom:2px;">
                        <input class="leading-tight block absolute" style="top:5px;left:0;" type="checkbox" id="whole-day">
                        <label for="whole-day">
                            Ganztätige Veranstaltung
                        </label>
                    </div>
                    <div class="checkbox-wrap relative mt-2 pl-5" style="padding-top:2px;padding-bottom:2px;">
                        <input class="leading-tight block absolute" style="top:5px;left:0;" type="checkbox" id="ignore-end">
                        <label for="ignore-end">
                            Das zeitliche Ende soll ignoriert werden
                        </label>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 md:pl-2">
                <div class="w-full p-4 mt-2 rounded border border-solid border-grey-light shadow bg-white">
                    <h3 class="font-bold mb-3">Wo</h3>
                    <div class="checkbox-wrap relative my-2 pl-5" style="padding-top:2px;padding-bottom:2px;">
                        <input class="leading-tight block absolute" style="top:5px;left:0;" type="checkbox" id="ignore-end">
                        <label for="ignore-end">
                            Diese Veranstaltung hat keinen physischen Standort
                        </label>
                    </div>

                    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Adresse</label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded mb-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Name Veranstaltungsort">
                    <small class="text-sm italic block mb-2">Erstellen Sie einen Veranstaltungsort oder fangen Sie an einen Namen einzugeben, um einen zuvor erstellten Veranstaltungsort zu suchen.</small>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded mb-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Adresse">
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded mb-2 py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" type="text" placeholder="Stadt / Ort">
                    <div class="relative my-2">
                        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                            <option>Deutschland</option>
                        </select>
                        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Karte</label>
                    <i class="text-teal-dark">Google Map vs. OSM</i>
                </div>
            </div>
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
                <label class="font-bold">Übersetzungspriorität</label>
                <div class="relative my-2">
                    <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
                        <option>hoch</option>
                    </select>
                    <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
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
            <div class="py-2 border-b solid border-grey-lighter mb-2">
                <label class="font-bold">
                    Beitragsbild
                </label>
                <button class="my-2 bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                    Beitragsbild festlegen
                </button>
            </div>
        </div>
    </div>
</div>