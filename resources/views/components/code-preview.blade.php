<div class="w-full border-2 border-gray-500 dark:border-gray-300 rounded-lg pt-2 bg-white dark:bg-gray-800 dark:text-white" x-component class="w-full">
    <div class="w-full">
        <div class="flex border-b items-center tracking-wide h-10 justify-start text-base font-[400]">
            <div
                x-component:preview-button
                class="h-full cursor-pointer px-3 py-2 overflow-hidden border-r border-t rounded-tr-md data-[active=true]:rounded-none data-[active=true]:border-none">
                Preview
            </div>
            <div
                x-component:code-button
                class="h-full cursor-pointer px-3 py-2 peer border-l border-t rounded-tl-md data-[active=true]:rounded-none data-[active=true]:border-none">
                Code
            </div>
            <div
                class="h-full  px-3 py-2 flex-1 flex justify-end border-t peer-data-[active=true]:rounded-tl-md peer-data-[active=true]:border-l">
                <button class="flex items-center justify-center text-gray-600" x-component:copy>
                    <div x-component:copied class="group">
                        <svg class="h-4 h-4 inline group-data-[copied=true]:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        <span class="text-xs hidden group-data-[copied=true]:inline-block">
                            Copied!
                        </span>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="p-6" x-component:preview>
        {{ $slot }}
    </div>
    <div class="overflow-x-auto" x-component:code></div>
</div>
