@include('layouts.navigation')

<x-listing-layout title="Lista de Consultas">
    <x-appointments.form :action="route('appointments.store')" :name="old('name')" :update="false"/>

    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() })

        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); 

        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        });
    </script>
</x-listing-layout>
