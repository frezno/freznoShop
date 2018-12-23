<footer class="bg-blue p-4">
    <div class="flex flex-wrap flex-col sm:flex-row justify-between container mx-auto">

        <div class="flex-1 text-center mt-2 sm:mt-0">
            <h3 class="text-blue-darker">LEGAL INFO</h3>

            <ul class="list-reset">
                <li class="mt-3"><a href="/legalinfo" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">Legal Info</a></li>
                <li class="mt-2"><a href="/privacy" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">Privacy Policy</a></li>
                <li class="mt-2"><a href="/terms" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">Terms &amp; Conditions</a></li>
            </ul>
        </div>

        <div class="flex-1 text-center mt-8 sm:mt-0">
            <h3 class="text-blue-darker">COMPANY INFO</h3>

            <ul class="list-reset">
                <li class="mt-3"><a href="/faq" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">FAQ</a></li>
                <li class="mt-2"><a href="/aboutus" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">About Us</a></li>
                <li class="mt-2"><a href="/shipping" class="text-blue-darker hover:bg-blue-lighter no-underline px-4 py-1">Shipping &amp; Payment</a></li>
            </ul>
        </div>

        <div class="flex-1 text-center mt-8 sm:mt-0">
            <h3 class="text-blue-darker">NEWSLETTER</h3>

            <form action="#" method="POST" class="mt-3">
                @csrf

                <div class="control">
                    <input type="text" class="p-2 w-48" name="email" value="{{ old('email') }}" placeholder="Enter your eMail Address">
                </div>

                <div class="control">
                    <button type="submit" class="border border-blue-darker rounded hover:bg-blue-lighter mt-3 px-4 py-2 text-center">Subscribe</button>
                </div>
            </form>

        </div>
    </div>
</footer>

<div class="text-center mt-1">FreznoShop &copy; Uwe E. Schirm</div>
