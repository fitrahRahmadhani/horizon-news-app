@extends ('layouts.guest')

@section ('content')
  <div class="mx-auto max-w-[1440px]">
    {{-- Breadcrumb --}}
    <x-breadcrumb
      class="my-4 px-8"
      :items="[
          ['label' => 'Home', 'url' => route('home')],
          ['label' => 'Sports', 'url' => route('home')],
          ['label' => 'Latest Football Match', 'url' => null],
      ]"
    />

    {{-- Featured Image --}}
    <div
      class="h-[220px] w-full overflow-hidden px-8 sm:h-[320px] sm:px-6 md:h-[420px] lg:h-[500px] lg:px-8"
    >
      <img
        class="h-full w-full rounded-xl object-cover"
        src="http://imageipsum.com/1200x500"
        alt="Face recognition technology used for social assistance distribution"
      />
    </div>

    {{-- Title --}}
    <h1
      class="mt-4 px-8 text-2xl font-semibold leading-tight sm:px-6 sm:text-3xl md:text-4xl lg:px-8 lg:text-5xl lg:leading-[1.15]"
    >
      Face Recognition Set to Make Social Assistance Distribution More Accurate
    </h1>

    {{-- Meta & Share --}}
    <div
      class="flex w-full flex-col gap-3 px-8 pt-4 sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8"
    >
      <div class="flex flex-wrap items-center gap-2">
        <img
          class="h-8 w-8 flex-shrink-0 rounded-full object-cover"
          src="https://i.pravatar.cc/300"
          alt="Dimas Pratama"
        />
        <p class="text-sm font-semibold sm:text-base">Dimas Pratama</p>
        <div class="h-1 w-1 rounded-full bg-gray-400"></div>
        <p class="text-sm text-gray-400">4 min read</p>

        <p class="ml-4 text-sm font-semibold sm:text-base">Tech</p>
        <div class="h-1 w-1 rounded-full bg-gray-400"></div>
        <p class="text-sm text-gray-400">8 min ago</p>
      </div>

      <div class="flex items-center gap-3">
        <p class="text-sm text-gray-600 sm:text-base">Share :</p>

        <a
          href="#"
          aria-label="Instagram"
          class="text-gray-600 transition duration-300 hover:text-gray-700"
        >
          <svg
            role="img"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 fill-current"
          >
            <title>Instagram</title>
            <path
              d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"
            />
          </svg>
        </a>

        <a
          href="#"
          aria-label="TikTok"
          class="text-gray-600 transition duration-300 hover:text-gray-700"
        >
          <svg
            role="img"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 fill-current"
          >
            <title>TikTok</title>
            <path
              d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
            />
          </svg>
        </a>

        <a
          href="#"
          aria-label="Twitter / X"
          class="text-gray-600 transition duration-300 hover:text-gray-700"
        >
          <svg
            role="img"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5 fill-current"
          >
            <title>X</title>
            <path
              d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"
            />
          </svg>
        </a>
      </div>
    </div>

    {{-- Body & Ad --}}
    <div class="grid w-full grid-cols-1 gap-8 px-8 pt-6 sm:px-6 lg:grid-cols-3 lg:gap-10 lg:px-8">
      <div
        class="col-span-1 flex flex-col gap-5 text-base leading-7 text-gray-700 sm:text-lg sm:leading-8 lg:col-span-2"
      >
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. In minima aliquid harum iusto. Sint voluptates consequatur recusandae voluptate numquam, quos, sequi officia odit sed magni cum veniam dolorum nostrum unde accusamus ratione aut architecto eligendi. Ipsa quos hic doloribus, blanditiis ullam velit harum molestiae ducimus fuga dolorum facere perferendis alias maxime adipisci labore atque quidem quisquam itaque ratione quam.</p>

        <p>Sint hic fugit aliquam, voluptate mollitia ad minus soluta laborum saepe inventore facere cupiditate corporis deserunt laudantium? Ex, perspiciatis fuga. Quasi sequi, illo repudiandae eos laborum magni fugiat, tenetur maxime ipsa accusamus fuga reprehenderit earum possimus maiores natus aliquid repellat, quia veritatis in quo a! Reprehenderit amet, ex at, culpa commodi corporis repudiandae inventore in voluptatem, dolore neque distinctio delectus ullam est maxime?</p>

        <p>Nemo, corporis quae saepe assumenda quo repellendus voluptatibus illum ipsa error ea. Aspernatur accusantium, accusamus omnis provident necessitatibus dolor molestias cumque, fugit iste rem asperiores eius cum ducimus! Odit autem, reprehenderit non cumque cum nostrum ea? Eius illum delectus rerum architecto suscipit, omnis porro ipsam perspiciatis incidunt odit dolorem quia ex iusto nisi, maxime aliquam aut.</p>

        <p>Molestias architecto nam minima ipsum id. Rem facilis similique, vero qui ratione recusandae voluptatum quia repudiandae, labore consectetur saepe tempora totam natus. Dolore vitae harum eligendi quis autem, temporibus alias excepturi repellendus odit provident quas reprehenderit laboriosam officia ipsa? Omnis nobis laboriosam nam recusandae ab repellat nisi quidem molestias voluptatum ullam, pariatur, officiis placeat quae sequi nihil earum adipisci.</p>

        <p>Ab voluptatum quos deserunt neque. Eligendi fugiat facilis minus eveniet accusantium voluptatum veniam nihil, quam harum, tenetur reiciendis excepturi saepe quo magnam ipsum! Eligendi officia, iusto repellendus labore blanditiis, id voluptates officiis minus non facere dignissimos ea porro aliquam molestias excepturi sed maiores rerum, enim sapiente vero quo!</p>

        <p>Molestiae totam dolores eum ab id quos, ex voluptates harum, nobis modi sed placeat beatae vel? Labore aspernatur quasi laborum voluptatibus totam pariatur accusamus voluptatum vel magnam. Vitae, laudantium repellat pariatur accusantium, neque quia qui mollitia consequatur accusamus corporis sint, error voluptatum placeat.</p>

        <p>Voluptatum expedita aut neque quam vel beatae iusto ad temporibus fuga voluptas dolores vitae modi cupiditate est, eligendi exercitationem, ipsam unde. Quos beatae delectus rerum voluptates aspernatur, odio quam omnis perferendis esse explicabo voluptatibus quae veniam minima! Magnam, ipsa? Dolorem, voluptas.</p>

        <p>Voluptatibus velit maxime earum, non, alias libero incidunt dolorum eligendi soluta deleniti unde, cum fugit architecto! Aut obcaecati non porro nulla rerum repellendus harum repudiandae aliquam hic provident incidunt enim iusto eligendi quo similique animi fuga tenetur nostrum exercitationem, iure vel quis? Perferendis harum ab eius error velit consequatur repudiandae a atque nisi nulla ipsum magnam blanditiis sint aliquam, quisquam sapiente!</p>

        <p>Natus quibusdam voluptate, velit numquam ut inventore earum, dolore consectetur voluptatem ea totam nobis? Fugit non soluta vero. Sapiente eius recusandae pariatur deleniti libero incidunt reprehenderit quasi consequatur ullam ipsam expedita saepe, maiores doloremque est dolorum, assumenda quia. Facere necessitatibus, assumenda reiciendis, nihil doloremque incidunt sed explicabo perferendis voluptas voluptatum, adipisci qui nobis praesentium cupiditate aliquam laboriosam blanditiis officiis numquam ea enim distinctio obcaecati est iure.</p>

        <p>Dicta natus sint omnis neque illum aperiam tempora sapiente pariatur dolorum, eveniet rem, nesciunt consectetur asperiores numquam earum nobis explicabo, repellat necessitatibus odit animi eligendi voluptatem et iure! Esse numquam aspernatur voluptates harum id, sit fugiat quas atque saepe eveniet? Odit deserunt vel hic necessitatibus accusantium modi quaerat, amet architecto aut explicabo earum fugit at, illo sunt corporis dicta laboriosam.</p>

        <p>Magnam ex a suscipit quasi ut aperiam, omnis eligendi temporibus corporis laboriosam pariatur totam deserunt sequi ipsam assumenda officiis obcaecati iure ullam est mollitia ipsa, modi doloremque quisquam accusantium! Magnam, tenetur modi? Odio enim optio temporibus eos odit eaque harum, at porro molestias sed nam est dicta, natus ratione dolores libero mollitia commodi fuga sit repudiandae quaerat?</p>

        <p>Repellat officiis, culpa adipisci magnam iure laudantium non sequi illo consectetur. Atque distinctio maxime animi odio dolores voluptatibus perspiciatis, illo nihil id dolor adipisci sapiente, corrupti aspernatur deserunt cum repudiandae eaque non sequi provident, magni ut. Est cupiditate inventore dolorem pariatur blanditiis itaque quaerat facere mollitia officiis dolore asperiores perferendis, eos sed nobis quis soluta odio doloremque!</p>

        <p>Maiores itaque mollitia, labore quibusdam quidem eaque dolorem temporibus dignissimos aut qui dolore impedit eligendi consectetur totam accusamus facere assumenda suscipit nisi cum enim quasi! Qui velit provident, iusto delectus, quo maxime, facilis quidem nulla soluta numquam blanditiis doloremque itaque ad sunt placeat accusantium natus. Obcaecati eligendi debitis similique accusamus amet enim dicta?</p>

        <p>Exercitationem obcaecati nam soluta fuga fugiat eligendi incidunt beatae aliquam molestiae similique. Impedit nostrum natus possimus error nisi dolores ipsam asperiores consequatur ea expedita debitis, ut quasi id odio quod dolor libero sint aut vitae? Quasi veniam debitis quis architecto fuga officia quidem nihil nulla ea aut, quam consectetur optio sapiente.</p>

        <p>Reprehenderit optio maxime iste labore, magni quis sint dolorem, temporibus esse eaque quo officia totam odit minus corporis nihil iure, consequuntur perferendis! Saepe nemo reprehenderit delectus eaque! Inventore aliquam eveniet autem ipsa nihil? Corporis culpa impedit molestiae! Ducimus, iure quos officia officiis porro ut corrupti explicabo, deleniti accusamus eaque nam aliquam dolorum impedit praesentium vitae velit quaerat?</p>

        <p>Labore quo alias atque omnis dolor repellendus quisquam unde ab praesentium ratione ex dolorum accusamus voluptas, magnam fuga reprehenderit animi doloribus illo rem enim quas quasi! Tenetur iusto cupiditate animi ullam repellendus, nesciunt, culpa quisquam neque repudiandae, dolore non provident ea? Fugiat amet non incidunt quidem earum nulla veritatis commodi aut dicta voluptate adipisci ad magni quis deserunt, doloremque, fuga accusantium.</p>

        <p>Itaque veniam maiores voluptate doloremque facere, reiciendis sequi voluptatibus dolorum consequatur enim harum quod officia quibusdam qui eum nemo possimus fuga. Quaerat, laboriosam obcaecati. Accusantium a maxime aliquid, repellat cum nisi earum exercitationem? Commodi, magni. Odit unde voluptatibus nulla aut sed odio nostrum vitae quaerat vero.</p>

        <p>Minima exercitationem modi expedita, dolorem harum facere optio quis incidunt perferendis soluta eaque animi asperiores numquam adipisci odit. Veritatis, nobis cupiditate! Natus minus accusantium, necessitatibus quod odit totam ducimus, suscipit corrupti est iusto laudantium iste sit impedit consequatur? Illum reprehenderit vel, deserunt perferendis, cupiditate at fugiat alias voluptas deleniti laboriosam iusto. Ex unde quis commodi tempora molestias nesciunt in quae eum veritatis?</p>
      </div>

      <aside
        class="col-span-1 h-[120px] text-center order-first md:order-last sm:h-[150px] lg:h-[720px]"
      >
        <img
          class="hidden h-full w-full object-cover lg:block"
          src="http://imageipsum.com/800x2000"
          alt="Advertisement"
        />
        <img
          class="block h-full w-full object-cover lg:hidden"
          src="http://imageipsum.com/2000x800"
          alt="Advertisement"
        />
        <p class="mt-1 text-xs italic text-gray-400">Advertisement</p>
      </aside>
    </div>

    <x-news-card-list />

    <x-cards.subcribe-card />
  </div>
@endsection
