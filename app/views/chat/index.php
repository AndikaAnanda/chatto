<div class="flex h-screen antialiased text-gray-800">
    <div class="flex flex-row h-full w-full overflow-x-hidden p-8 flex-wrap">
        <div class="flex flex-col flex-auto h-full px-3 pt-16">
            <div class="flex flex-col flex-auto flex-shrink-0 rounded-2xl bg-gray-200 h-full p-4">
                <div class="flex flex-col h-full overflow-x-auto mb-4">
                    <div class="flex flex-col h-full">
                        <!---- Container Chat ---->
                        <div id="messages-container" class="flex-1 py-2 px-3 overflow-auto">

                            <ul class="">
                                <?php foreach ($data['chat'] as $chat) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="">
                                            <?= $chat['chat_sender']; ?>
                                        </a>
                                        <?= ": " . $chat['chat_message']; ?>

                                    </li>
                                <?php endforeach; ?>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center h-16 rounded-xl bg-white w-full px-4">
                    <div>
                        <button class="flex items-center justify-center text-gray-400 hover:text-gray-600">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-grow ml-4">
                        <div class="relative w-full">
                            <form action="<?= BASEURL; ?>/chat/submitChat" method="post">
                            <input type='hidden' name='chat_sender' id="chat_sender" value=<?= $_SESSION['name'] ?> />
                                <input name="chat_message" id="chat_message" type="text" autofocus class="flex w-full border rounded-xl focus:outline-none focus:border-indigo-300 pl-4 h-10" />

                                <button class="absolute flex items-center justify-center h-full right-0 top-0 bg-indigo-500 hover:bg-indigo-600 rounded-xl text-white px-6 py-1 flex-shrink-0">
                                    <span>Send</span>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="flex flex-col py-8 pl-6 pr-2 w-64 bg-white flex-shrink-0">
            <div class="flex flex-col mt-8">
                <div class="flex flex-row items-center justify-between text-xs">
                    <span class="font-bold">Online</span>
                    <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">5</span>
                </div>
                <div class="flex flex-col space-y-1 mt-4 -mx-2 h-70 overflow-y-auto">
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                            K
                        </div>
                        <div class="ml-2 text-sm font-semibold">Ken Arok</div>
                    </button>
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-gray-200 rounded-full">
                            B
                        </div>
                        <div class="ml-2 text-sm font-semibold">Balaputeradewa</div>
                    </button>
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-orange-200 rounded-full">
                            J
                        </div>
                        <div class="ml-2 text-sm font-semibold">Jayawardhana</div>
                    </button>
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-pink-200 rounded-full">
                            T
                        </div>
                        <div class="ml-2 text-sm font-semibold">Tunggadewi</div>
                    </button>
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-purple-200 rounded-full">
                            J
                        </div>
                        <div class="ml-2 text-sm font-semibold">Jayabaya</div>
                    </button>
                </div>
                <div class="flex flex-row items-center justify-between text-xs mt-6">
                    <span class="font-bold">Archived</span>
                    <span class="flex items-center justify-center bg-gray-300 h-4 w-4 rounded-full">1</span>
                </div>
                <div class="flex flex-col space-y-1 mt-4 -mx-2">
                    <button class="flex flex-row items-center hover:bg-gray-100 rounded-xl p-2">
                        <div class="flex items-center justify-center h-8 w-8 bg-indigo-200 rounded-full">
                            B
                        </div>
                        <div class="ml-2 text-sm font-semibold">Balaputeradewa</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>