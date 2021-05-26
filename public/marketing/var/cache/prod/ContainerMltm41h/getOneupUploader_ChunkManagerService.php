<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'oneup_uploader.chunk_manager' shared service.

return $this->services['oneup_uploader.chunk_manager'] = new \Oneup\UploaderBundle\Uploader\Chunk\ChunkManager($this->getParameter('oneup_uploader.chunks'), ${($_ = isset($this->services['oneup_uploader.chunks_storage']) ? $this->services['oneup_uploader.chunks_storage'] : ($this->services['oneup_uploader.chunks_storage'] = new \Oneup\UploaderBundle\Uploader\Chunk\Storage\FilesystemStorage(($this->targetDirs[0].'/uploader/chunks')))) && false ?: '_'});
