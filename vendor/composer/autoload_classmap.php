<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AbstractFactory\\Framework\\Factory' => $baseDir . '/AbstractFactory/Framework/Factory.php',
    'AbstractFactory\\Framework\\Item' => $baseDir . '/AbstractFactory/Framework/Item.php',
    'AbstractFactory\\Framework\\Link' => $baseDir . '/AbstractFactory/Framework/Link.php',
    'AbstractFactory\\Framework\\Page' => $baseDir . '/AbstractFactory/Framework/Page.php',
    'AbstractFactory\\Framework\\Tray' => $baseDir . '/AbstractFactory/Framework/Tray.php',
    'AbstractFactory\\ListFactory\\ListFactory' => $baseDir . '/AbstractFactory/ListFactory/ListFactory.php',
    'AbstractFactory\\ListFactory\\ListLink' => $baseDir . '/AbstractFactory/ListFactory/ListLink.php',
    'AbstractFactory\\ListFactory\\ListPage' => $baseDir . '/AbstractFactory/ListFactory/ListPage.php',
    'AbstractFactory\\ListFactory\\ListTray' => $baseDir . '/AbstractFactory/ListFactory/ListTray.php',
    'AbstractFactory\\TableFactory\\TableFactory' => $baseDir . '/AbstractFactory/TableFactory/TableFactory.php',
    'AbstractFactory\\TableFactory\\TableLink' => $baseDir . '/AbstractFactory/TableFactory/TableLink.php',
    'AbstractFactory\\TableFactory\\TablePage' => $baseDir . '/AbstractFactory/TableFactory/TablePage.php',
    'AbstractFactory\\TableFactory\\TableTray' => $baseDir . '/AbstractFactory/TableFactory/TableTray.php',
    'Adapter\\my\\AbstractPrint' => $baseDir . '/Adapter/my/AbstractPrint.php',
    'Adapter\\my\\Banner' => $baseDir . '/Adapter/my/Banner.php',
    'Adapter\\my\\IPrint' => $baseDir . '/Adapter/my/IPrint.php',
    'Adapter\\my\\PrintBanner' => $baseDir . '/Adapter/my/PrintBanner.php',
    'Adapter\\my\\PrintBanner2' => $baseDir . '/Adapter/my/PrintBanner2.php',
    'Bridge\\CountDisplay' => $baseDir . '/Bridge/CountDisplay.php',
    'Bridge\\Display' => $baseDir . '/Bridge/Display.php',
    'Bridge\\DisplayImpl' => $baseDir . '/Bridge/DisplayImpl.php',
    'Bridge\\StringDisplayImpl' => $baseDir . '/Bridge/StringDisplayImpl.php',
    'Builder\\my\\Builder' => $baseDir . '/Builder/my/Builder.php',
    'Builder\\my\\Director' => $baseDir . '/Builder/my/Director.php',
    'Builder\\my\\HtmlBuilder' => $baseDir . '/Builder/my/HtmlBuilder.php',
    'Builder\\my\\TextBuilder' => $baseDir . '/Builder/my/TextBuilder.php',
    'ChainOfResponsibility\\LimitSupport' => $baseDir . '/ChainOfResponsibility/LimitSupport.php',
    'ChainOfResponsibility\\NoSupport' => $baseDir . '/ChainOfResponsibility/NoSupport.php',
    'ChainOfResponsibility\\OddSupport' => $baseDir . '/ChainOfResponsibility/OddSupport.php',
    'ChainOfResponsibility\\SpecialSupport' => $baseDir . '/ChainOfResponsibility/SpecialSupport.php',
    'ChainOfResponsibility\\Support' => $baseDir . '/ChainOfResponsibility/Support.php',
    'ChainOfResponsibility\\Trouble' => $baseDir . '/ChainOfResponsibility/Trouble.php',
    'ComposerAutoloaderInitb7022f62532204302910e03ece2f4a0a' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInitb7022f62532204302910e03ece2f4a0a' => $vendorDir . '/composer/autoload_static.php',
    'Composite\\Directory' => $baseDir . '/Composite/Directory.php',
    'Composite\\Entry' => $baseDir . '/Composite/Entry.php',
    'Composite\\File' => $baseDir . '/Composite/File.php',
    'Composite\\FileTreatmentException' => $baseDir . '/Composite/FileTreatmentException.php',
    'Decorator\\Border' => $baseDir . '/Decorator/Border.php',
    'Decorator\\Display' => $baseDir . '/Decorator/Display.php',
    'Decorator\\FullBorder' => $baseDir . '/Decorator/FullBorder.php',
    'Decorator\\SideBorder' => $baseDir . '/Decorator/SideBorder.php',
    'Decorator\\StringDisplay' => $baseDir . '/Decorator/StringDisplay.php',
    'Facade\\PageMaker\\Database' => $baseDir . '/Facade/PageMaker/Database.php',
    'Facade\\PageMaker\\HtmlWriter' => $baseDir . '/Facade/PageMaker/HtmlWriter.php',
    'Facade\\PageMaker\\PageMaker' => $baseDir . '/Facade/PageMaker/PageMaker.php',
    'FactoryMethod\\Framework\\Factory' => $baseDir . '/FactoryMethod/Framework/Factory.php',
    'FactoryMethod\\Framework\\Product' => $baseDir . '/FactoryMethod/Framework/Product.php',
    'FactoryMethod\\IDCard\\IDCard' => $baseDir . '/FactoryMethod/idcard/IDCard.php',
    'FactoryMethod\\IDCard\\IDCardFactory' => $baseDir . '/FactoryMethod/idcard/IDCardFactory.php',
    'Iterator\\my\\Aggregate' => $baseDir . '/Iterator/my/Aggregate.php',
    'Iterator\\my\\Book' => $baseDir . '/Iterator/my/Book.php',
    'Iterator\\my\\BookShelf' => $baseDir . '/Iterator/my/BookShelf.php',
    'Iterator\\my\\BookShelfImplementsIteratorAggregate' => $baseDir . '/Iterator/my/BookShelfImplementsIteratorAggregate.php',
    'Iterator\\my\\BookShelfImplementsPhpIterator' => $baseDir . '/Iterator/my/BookShelfImplementsPhpIterator.php',
    'Iterator\\my\\BookShelfIterator' => $baseDir . '/Iterator/my/BookShelfIterator.php',
    'Iterator\\my\\BookShelfWithPhpIterator' => $baseDir . '/Iterator/my/BookShelfWithPhpIterator.php',
    'Iterator\\my\\Iterator' => $baseDir . '/Iterator/my/Iterator.php',
    'Mediator\\ColleagueInterface' => $baseDir . '/Mediator/ColleagueInterface.php',
    'Mediator\\Engineer' => $baseDir . '/Mediator/Engineer.php',
    'Mediator\\Manager' => $baseDir . '/Mediator/Manager.php',
    'Mediator\\MediatorInterface' => $baseDir . '/Mediator/MediatorInterface.php',
    'Observer\\DigitObserver' => $baseDir . '/Observer/DigitObserver.php',
    'Observer\\GraphObserver' => $baseDir . '/Observer/GraphObserver.php',
    'Observer\\IncrementalNumberGenerator' => $baseDir . '/Observer/IncrementalNumberGenerator.php',
    'Observer\\NumberGenerator' => $baseDir . '/Observer/NumberGenerator.php',
    'Observer\\NumberObserverInterface' => $baseDir . '/Observer/NumberObserverInterface.php',
    'Observer\\RandomNumberGenerator' => $baseDir . '/Observer/RandomNumberGenerator.php',
    'Prototype\\Framework\\Manager' => $baseDir . '/Prototype/Framework/Manager.php',
    'Prototype\\Framework\\Product' => $baseDir . '/Prototype/Framework/Product.php',
    'Prototype\\my\\MessageBox' => $baseDir . '/Prototype/my/MessageBox.php',
    'Prototype\\my\\UnderlinePen' => $baseDir . '/Prototype/my/UnderlinePen.php',
    'Proxy\\PrintableInterface' => $baseDir . '/Proxy/PrintableInterface.php',
    'Proxy\\Printer' => $baseDir . '/Proxy/Printer.php',
    'Proxy\\PrinterProxy' => $baseDir . '/Proxy/PrinterProxy.php',
    'Singleton\\my\\Singleton' => $baseDir . '/Singleton/my/Singleton.php',
    'Singleton\\my\\TicketMaker' => $baseDir . '/Singleton/my/TicketMaker.php',
    'Singleton\\my\\Triple' => $baseDir . '/Singleton/my/Triple.php',
    'State\\my\\ContextInterface' => $baseDir . '/State/my/ContextInterface.php',
    'State\\my\\DayState' => $baseDir . '/State/my/DayState.php',
    'State\\my\\NightState' => $baseDir . '/State/my/NightState.php',
    'State\\my\\Safe' => $baseDir . '/State/my/Safe.php',
    'State\\my\\StateInterface' => $baseDir . '/State/my/StateInterface.php',
    'Strategy\\Hand' => $baseDir . '/Strategy/Hand.php',
    'Strategy\\Player' => $baseDir . '/Strategy/Player.php',
    'Strategy\\ProbStrategy' => $baseDir . '/Strategy/ProbStrategy.php',
    'Strategy\\StrategyInterface' => $baseDir . '/Strategy/StrategyInterface.php',
    'Strategy\\WinningStrategy' => $baseDir . '/Strategy/WinningStrategy.php',
    'TemplateMethod\\my\\AbstractDisplay' => $baseDir . '/TemplateMethod/my/AbstractDisplay.php',
    'TemplateMethod\\my\\CharDisplay' => $baseDir . '/TemplateMethod/my/CharDisplay.php',
    'TemplateMethod\\my\\StringDisplay' => $baseDir . '/TemplateMethod/my/StringDisplay.php',
    'Visitor\\Directory' => $baseDir . '/Visitor/Directory.php',
    'Visitor\\ElementInterface' => $baseDir . '/Visitor/ElementInterface.php',
    'Visitor\\Entry' => $baseDir . '/Visitor/Entry.php',
    'Visitor\\File' => $baseDir . '/Visitor/File.php',
    'Visitor\\FileTreatmentException' => $baseDir . '/Visitor/FileTreatmentException.php',
    'Visitor\\ListVisitor' => $baseDir . '/Visitor/ListVisitor.php',
    'Visitor\\Visitor' => $baseDir . '/Visitor/Visitor.php',
);
