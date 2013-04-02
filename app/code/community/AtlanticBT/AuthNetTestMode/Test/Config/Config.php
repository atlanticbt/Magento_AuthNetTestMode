<?php
class AtlanticBT_AuthNetTestMode_Test_Config_Config
    extends EcomDev_PHPUnit_Test_Case_Config
{
    //  {{{ blocksProvider()

    public function blocksProvider()
    {
        return array(
            array('atlanticbt_authnettestmode/checkout_onepage_validate', 'AtlanticBT_AuthNetTestMode_Block_Checkout_Onepage_Validate'),
        );
    }

    //  }}}
    //  {{{ resourceModelProvider()

    public function resourceModelProvider()
    {
        return array();
    }

    //  }}}
    //  {{{ modelsProvider()

    public function modelsProvider()
    {
        return array(
            array('atlanticbt_authnettestmode/observer', 'AtlanticBT_AuthNetTestMode_Model_Observer'),
        );
    }

    //  }}}
    //  {{{ helpersProvider()

    public function helpersProvider()
    {
        return array();
    }

    //  }}}
    //  {{{ observersProvider()

    public function observersProvider()
    {
        return array(
            array('global', 'catalog_product_save_before', 'atlanticbt_featured/observer', 'updateFeatured'),
        );
    }

    //  }}}
    //  {{{ definedLayoutFilesProvider()

    public function definedLayoutFilesProvider()
    {
        return array(
            array('frontend', 'atlanticbt/authnettestmode.xml'),
        );
    }

    //  }}}
    //  {{{ themeLayoutFilesExistProvider()

    public function themeLayoutFilesExistProvider()
    {
        return array(
            array('frontend', 'atlanticbt/authnettestmode.xml', 'default', 'default'),
        );
    }

    //  }}}

    //  {{{ assertFeaturedModuleInCommunityCodePool()

    /**
     * @test
     * @group jmk
     * @group config
     */
    public function assertFeaturedModuleInCommunityCodePool()
    {
        $this->assertModuleCodePool('community');
    }

    //  }}}
    //  {{{ assertFeaturedModelAliases()

    /**
     * @test
     * @group jmk
     * @group config
     * @dataProvider modelsProvider
     */
    public function assertFeaturedModelAliases(
        $classAlias,
        $expectedClassName
    ) {
        $this->assertModelAlias($classAlias, $expectedClassName);
    }

    //  }}}
    //  {{{ assertFeaturedResourceModelAliases()

    /**
     * test
     * @group jmk
     * @group config
     * @dataProvider resourceModelProvider
     */
    public function assertFeaturedResourceModelAliases(
        $classAlias,
        $expectedClassName
    ) {
        $this->assertResourceModelAlias($classAlias, $expectedClassName);
    }

    //  }}}
    //  {{{ assertFeaturedBlockAliases()

    /**
     * @test
     * @group jmk
     * @group config
     * @dataProvider blocksProvider
     */
    public function assertFeaturedBlockAliases(
        $classAlias,
        $expectedClassName
    ) {
        $this->assertBlockAlias($classAlias, $expectedClassName);
    }

    //  }}}
    //  {{{ assertFeaturedHelperAliases()

    /**
     * test
     * @group jmk
     * @group config
     * @dataProvider helpersProvider
     */
    public function assertFeaturedHelperAliases(
        $classAlias,
        $expectedClassName
    ) {
        $this->assertHelperAlias($classAlias, $expectedClassName);
    }

    //  }}}
    //  {{{ assertFeaturedEventObserversDefined()

    /**
     * test
     * @group config
     * @group jmk
     * @dataProvider observersProvider
     */
    public function assertFeaturedEventObserversDefined(
        $area,
        $eventName,
        $observerClassAlias,
        $observerMethod
    ) {
        $this->assertEventObserverDefined(
            $area,
            $eventName,
            $observerClassAlias,
            $observerMethod
        );
    }

    //  }}}
    //  {{{ assertFeaturedLayoutFileDefined()

    /**
     * @test
     * @group config
     * @group jmk
     * @dataProvider definedLayoutFilesProvider
     */
    public function assertFeaturedLayoutFileDefined($area, $expectedFileName)
    {
        $this->assertLayoutFileDefined($area, $expectedFileName);
    }

    //  }}}
    //  {{{ assertFeaturedLayoutFileExistsForDefaultTheme()

    /**
     * @test
     * @group config
     * @group jmk
     * @dataProvider themeLayoutFilesExistProvider
     */
    public function assertFeaturedLayoutFileExistsForDefaultTheme(
        $area,
        $filename,
        $theme,
        $designPackage
    ) {
        $this->assertLayoutFileExistsInTheme(
            $area,
            $filename,
            $theme,
            $designPackage
        );
    }

    //  }}}
}
