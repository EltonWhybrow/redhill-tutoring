<!-- Alert Notification -->
<div id="notification" class="mb-0 md:my-0">
    <!-- {# purgecss: bg-info-400 bg-success-400 bg-warning-400 bg-alert-400 #} -->
    <div class="flex justify-center items-center bg-<?php echo $color ?>-400 px-3 py-2">
        <div class="flex-1"></div>

        <div class="pr-3 inline-block">


            <p class="flex justify-items-center items-center text-<?php echo $color ?>-900 text-sm align-text-top">

                <!-- {# purgecss: text-info-900 text-success-900 text-warning-900 text-alert-900 #} -->

                <?php
                switch ($color) {
                    case "info":
                        echo '
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-none h-8 w-auto mb-1 text-info-900" viewBox="0 0 20 20"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                clip-rule="evenodd" />
            </svg>';
                        break;
                    case "success":
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="flex-none h-8 w-auto mb-1 text-success-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>';
                        break;
                    case "warning":
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="flex-none h-8 w-auto mb-1 text-warning-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>';
                        break;
                    case "alert":
                        echo '<svg xmlns="http://www.w3.org/2000/svg" class="flex-none h-8 w-auto mb-1 text-alert-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>';
                        break;
                    default:
                        echo '
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-none h-8 w-auto mb-1 text-info-900" viewBox="0 0 24 24"
            fill="currentColor">
            <path fill-rule="evenodd"
                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                clip-rule="evenodd" />
            </svg>';
                }
                ?>
                <!-- {# purgecss: text-info-900 text-success-900 text-warning-900 text-alert-900 #} -->
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6 mb-1 text-<?php echo $color ?>-900" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                    clip-rule="evenodd" />
            </svg> -->
                <span class="pl-2">
                    <?php echo $message ?>

                    <?php
                    if (!empty($link)) { ?>
                        - <a href="<?php echo $link ?>" class="underline" target="_blank">Find out more</a>
                    <?php }
                    ?>
                </span>
            </p>
        </div>

        <div class="flex-1 text-right cursor-pointer" id="close-message">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-message w-6 h-6 mb-1 float-right text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>
</div>