<div class="mb-12 text-teal-dark">
    <ul class="mt-4">
        <li>ist es ausreichend, wenn man bestehende Benutzer nur im internen Backend zuordnen kann?</li>
        <li>was ist der use case für "Andere Rollen"?</li>
    </ul>
</div>

<div class="flex flex-wrap mb-4">
    <div class="w-2/5 flex flex-wrap flex-col justify-center">
        <h2 class="heading font-normal">
            Neuen Benutzer anlegen
        </h2>
    </div>
    <div class="w-3/5 flex justify-end">
        <button class="bg-blue hover:bg-blue-dark text-white font-bold py-3 px-4 rounded">
            Benutzer anlegen
        </button>
    </div>
</div>

<div class="w-full p-4 rounded border border-solid border-grey-light shadow bg-white">
    <label class="mb-2 block font-bold uppercase text-sm">Benutzername</label>
    <input class="mb-2 appearance-none block w-full bg-grey-lighter text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Benutzername" type="text">

    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Name (optional)</label>
    <input class="mb-2 appearance-none block w-full bg-grey-lighter text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="Name (optional)" type="text">

    <label class="mt-4 mb-2 block font-bold uppercase text-sm">E-Mail</label>
    <input class="mb-2 appearance-none block w-full bg-grey-lighter text-grey-darkest border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" placeholder="E-Mail" type="text">

    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Rolle</label>
    <div class="relative my-2">
        <select class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darkest py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey">
            <option>Organisation</option>
            <option>Vertrauenswürde Organisation</option>
            <option>Verwaltung</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darkest">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>

    <label class="mt-4 mb-2 block font-bold uppercase text-sm">Keine Bestätigungs-E-Mail</label>
    <div class="checkbox-wrap relative mt-2 pl-5" style="padding-top:2px;padding-bottom:2px;">
        <input class="leading-tight block absolute" style="top:5px;left:0;" type="checkbox" id="whole-day">
        <label for="whole-day">
            Benutzer hinzufügen ohne eine E-Mail zu versenden, die bestätigt werden muss.
        </label>
    </div>
</div>