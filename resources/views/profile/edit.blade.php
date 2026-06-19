<x-settings-layout activeTab="profile">
    <div class="space-y-8">
        
        <div class="bg-white rounded-3xl shadow-saas border border-slate-100/50 overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-saas border border-slate-100/50 overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>

        <div class="bg-red-50/50 rounded-3xl shadow-sm border border-red-100/50 overflow-hidden">
            <div class="p-6 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>

    </div>
</x-settings-layout>
