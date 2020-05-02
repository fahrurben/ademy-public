<?php

namespace App\Http\Middleware;

use Closure;
use Doctrine\ORM\EntityManagerInterface;
use Domain\Organization\Organization;
use Illuminate\Support\Facades\URL;

class SubdomainMiddleware
{
    protected $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        URL::defaults(['subdomain' => request('subdomain')]);

        $organization = $this->entityManager->getRepository(Organization::class)->findOneBy(['subdomain' => request('subdomain')]);

        $request->merge(array("organizationId" => $organization->getId()));
        return $next($request);
    }
}
