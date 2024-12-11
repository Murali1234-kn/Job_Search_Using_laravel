<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <div class="space-y-10">
            <section>
                <x-section-heading>Feature Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    <x-job-card></x-job-card>
                    <x-job-card></x-job-card>
                    <x-job-card></x-job-card>
                </div>
            </section>
            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 space-x-1">
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                    <x-tag>Tag</x-tag>
                </div>
            </section>
            <section>
                <x-section-heading>Recent Jobs</x-section-heading>

            </section>
        </div>
    </x-app-layout>
</body>

</html>