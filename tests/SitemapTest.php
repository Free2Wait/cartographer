<?php
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as LocalAdapter;

class SitemapTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Tackk\Cartographer\Sitemap
     */
    protected $sitemap;

    public function setUp()
    {
        $adapter = new LocalAdapter(dirname(__DIR__).'/storage');
        $filesystem = new Filesystem($adapter);
        $this->sitemap = new Tackk\Cartographer\Sitemap($filesystem);
    }

    public function testCanInstantiate()
    {
        $this->assertInstanceOf('Tackk\Cartographer\Sitemap', $this->sitemap);
    }

    public function testGetFilesystem()
    {
        $this->assertInstanceOf('League\Flysystem\FilesystemInterface', $this->sitemap->getFilesystem());
    }
}
