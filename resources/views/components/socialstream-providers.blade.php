
 <div class="d-flex justify-content-center">
    @if (JoelButcher\Socialstream\Socialstream::hasFacebookSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::facebook()]) }}" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
            <span class="sr-only">Facebook</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGoogleSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::google()]) }}" class="btn btn-icon btn-label-google-plus me-3" >
        <i class="tf-icons bx bxl-google-plus"></i>
            <span class="sr-only">Google</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasTwitterSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::twitter()]) }}" class="btn btn-icon btn-label-twitter">
        <i class="tf-icons bx bxl-twitter"></i>
            <span class="sr-only">Twitter</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasLinkedInSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::linkedin()]) }}">
            <x-linked-in-icon class="h-6 w-6 mx-2" />
            <span class="sr-only">LinkedIn</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGithubSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::github()]) }}">
            <x-github-icon class="h-6 w-6 mx-2" />
            <span class="sr-only">GitHub</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasGitlabSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::gitlab()]) }}">
            <x-gitlab-icon class="h-6 w-6 mx-2" />
            <span class="sr-only">GitLab</span>
        </a>
    @endif

    @if (JoelButcher\Socialstream\Socialstream::hasBitbucketSupport())
        <a href="{{ route('oauth.redirect', ['provider' => JoelButcher\Socialstream\Providers::bitbucket()]) }}">
            <x-bitbucket-icon />
            <span class="sr-only">BitBucket</span>
        </a>
    @endif
</div>
