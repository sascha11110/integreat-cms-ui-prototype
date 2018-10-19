<div class="mb-12 text-teal-dark">
    <ul class="mt-4">
        <li>Was ist "Seite anhängen"?</li>
        <li>Ist "Übersetzungspriorität" relevant?</li>
        <li>Ist eine Unterscheidung der Artikelbilder à la "Artikelbild in Übersetzungen duplizieren" relevant? Ist das Artikelbild überhaupt relevant?</li>
        <li>Ist die Planung von Beiträgen erforderlich?</li>
        <li>Ist die Möglichkeit zur Einstellung der Sichtbarkeit erforderlich?</li>
        <li>
            TinyMCE
            <ul>
                <li>Welche Features im Editor sind relevant?</li>
                <li>Welche Features sind definitv überflüssig?</li>
                <li>Soll das Design des Editors erhalten bleiben? (könnten wir von WP kopieren)</li>
            </ul>
        </li>
        <li>Können "Reihenfolge" und ggf. auch "Eltern" rausgelassen werden? Würde das gerne nur über einen Zugangspunkt handeln</li>
        <li>Vorschau fliegt raus, da es die ja aktuell auch nicht mehr gibt</li>
        <li>Ist der Status "Ausstehender Review" relevant?</li>
        <li>Soll das zugehörige Feedback auf der Bearbeitungsseite angezeigt werden?</li>
    </ul>
</div>

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
        <div class="w-full p-4 rounded border border-solid border-grey-light shadow bg-white">
            <input class="appearance-none block w-full bg-grey-lighter text-xl text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Titel hier eingeben" type="text">
            <img src="images/tinymce.png" class="mt-5" />
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
                <label class="font-bold">Übergeordnete Seite</label>
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
                    Beitragsbild<br>
                    <span class="text-teal-dark font-normal">(ggf. besser "Icon"?)</span>
                </label>
                <button class="my-2 bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                    Beitragsbild festlegen
                </button>
            </div>
            <div class="pt-2 mb-2">
                <label class="font-bold">Seite anhängen</label><br>
                <span class="text-teal-dark">???</span>
            </div>
        </div>
    </div>
</div>