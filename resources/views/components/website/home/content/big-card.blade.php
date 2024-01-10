<article class="group shadow-lg shadow-slate-800/40 rounded-lg w-[100%] lg:w-full">
    <a href="#" class="cursor-pointer relative">
        <img alt="Lava"
            src="https://images.unsplash.com/photo-1631451095765-2c91616fc9e6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="h-72 w-full rounded-t-lg object-cover shadow-xl blur-[0.6px] transition" />
        <img src="{{ asset('assets/website/pages/home/images/content/play.svg') }}" alt="زر التشغيل"
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 bg-white rounded-full p-1" />
    </a>
    <div class="p-8">
        <h3 class="text-lg font-medium text-gray-900">Finding the Journey to Mordor</h3>
        <p class="mt-2 text-sm/relaxed text-gray-500">
            @php
                $content = 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.';
                if (mb_strlen($content) > 170) {
                    $shortenedContent = mb_substr($content, 0, 170);
                    echo $shortenedContent . '...';
                } else {
                    echo $content;
                }
            @endphp
        </p>
    </div>
</article>
