-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2014 at 02:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yiicomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `AddressId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `SupplierId` int(11) DEFAULT NULL,
  `AddressTypeId` int(11) DEFAULT NULL,
  `IsCompany` bit(1) DEFAULT NULL,
  `CompanyName` varchar(500) DEFAULT NULL,
  `TaxNumber` varchar(50) DEFAULT NULL,
  `TaxOffice` varchar(500) DEFAULT NULL,
  `ShippingPerson` varchar(100) DEFAULT NULL,
  `ShippingPhone` char(10) DEFAULT NULL,
  `IdentityNumber` char(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `AddressLine1` varchar(1000) DEFAULT NULL,
  `AddressLine2` varchar(1000) DEFAULT NULL,
  `District` varchar(1000) DEFAULT NULL,
  `County` varchar(1000) DEFAULT NULL,
  `City` varchar(1000) DEFAULT NULL,
  `GeoZone` varchar(1000) DEFAULT NULL,
  `Country` varchar(1000) DEFAULT NULL,
  `PostalCode` char(5) DEFAULT NULL,
  `FullAddress` mediumtext,
  `IsValid` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`AddressId`),
  KEY `FK_Addresses_User` (`UserId`),
  KEY `FK_Addresses_AddressTypes` (`AddressTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `addresses`:
--   `UserId`
--       `user` -> `id`
--   `AddressTypeId`
--       `addresstypes` -> `AddressTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresstypes`
--

DROP TABLE IF EXISTS `addresstypes`;
CREATE TABLE IF NOT EXISTS `addresstypes` (
  `AddressTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Description` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`AddressTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

DROP TABLE IF EXISTS `affiliates`;
CREATE TABLE IF NOT EXISTS `affiliates` (
  `AffiliateId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) DEFAULT NULL,
  `ReferedCustomerId` int(11) DEFAULT NULL,
  `ActivatedOn` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`AffiliateId`),
  KEY `FK_Affilates_Customers` (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `affiliates`:
--   `CustomerId`
--       `customers` -> `CustomerId`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `auth_assignment`:
--   `item_name`
--       `auth_item` -> `name`
--

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('superuser', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `auth_item`:
--   `rule_name`
--       `auth_rule` -> `name`
--

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('marketingadmin', 2, NULL, NULL, NULL, 1409767977, 1409767977),
('productadmin', 2, NULL, NULL, NULL, 1409767897, 1409767897),
('superuser', 2, 'GOD', NULL, NULL, 1409767810, 1409767810),
('suppliersadmin', 2, NULL, NULL, NULL, 1409767977, 1409767977),
('user', 2, 'a user', NULL, NULL, 1409768049, 1409768049);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `auth_item_child`:
--   `parent`
--       `auth_item` -> `name`
--   `child`
--       `auth_item` -> `name`
--

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('superuser', 'marketingadmin'),
('superuser', 'productadmin'),
('superuser', 'suppliersadmin'),
('superuser', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `BankId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) NOT NULL,
  `WebSite` varchar(500) DEFAULT NULL,
  `Eft` varchar(20) DEFAULT NULL,
  `Swift` varchar(20) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`BankId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `BrandId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `Description` mediumtext,
  `Website` varchar(500) DEFAULT NULL,
  `LogoUrl` varchar(1000) DEFAULT NULL,
  `IsLogoVisible` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`BrandId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `campaignproducts`
--

DROP TABLE IF EXISTS `campaignproducts`;
CREATE TABLE IF NOT EXISTS `campaignproducts` (
  `CampaignProductId` int(11) NOT NULL AUTO_INCREMENT,
  `CampaignId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Price` decimal(18,2) DEFAULT NULL,
  `Stock` decimal(18,2) DEFAULT NULL,
  `StockUnitId` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CampaignProductId`),
  KEY `FK_CampaignProducts_Campaigns` (`CampaignId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `campaignproducts`:
--   `CampaignId`
--       `campaigns` -> `CampaignId`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
  `CampaignId` int(11) NOT NULL AUTO_INCREMENT,
  `CampaignTypeId` int(11) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `ShortDescription` varchar(500) DEFAULT NULL,
  `Description` mediumtext,
  `HtmlDescription` varchar(150) DEFAULT NULL,
  `DiscountPercent` int(11) DEFAULT NULL,
  `ImageUrl` varchar(500) DEFAULT NULL,
  `OrderLimit` int(11) DEFAULT NULL,
  `MaximumProductPurchaceLimit` int(11) DEFAULT NULL,
  `MinimumProductPurchaceLimit` int(11) DEFAULT NULL,
  `StartedOn` int(11) DEFAULT NULL,
  `EndedOn` int(11) DEFAULT NULL,
  `ShippingStartsOn` int(11) DEFAULT NULL,
  `ShippingEndsOn` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CampaignId`),
  KEY `FK_Campaigns_CampaignTypes` (`CampaignTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `campaigns`:
--   `CampaignTypeId`
--       `campaigntypes` -> `CampaignTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigntypes`
--

DROP TABLE IF EXISTS `campaigntypes`;
CREATE TABLE IF NOT EXISTS `campaigntypes` (
  `CampaignTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Description` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CampaignTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `CityId` int(11) NOT NULL AUTO_INCREMENT,
  `GeoZoneId` int(11) DEFAULT NULL,
  `Name` varchar(1000) NOT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CityId`),
  KEY `FK_Cities_GeoZones` (`GeoZoneId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `cities`:
--   `GeoZoneId`
--       `geozones` -> `GeoZoneId`
--

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

DROP TABLE IF EXISTS `counties`;
CREATE TABLE IF NOT EXISTS `counties` (
  `CountyId` int(11) NOT NULL AUTO_INCREMENT,
  `CityId` int(11) DEFAULT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CountyId`),
  KEY `FK_Counties_Cities` (`CityId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `counties`:
--   `CityId`
--       `cities` -> `CityId`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `CountryId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(1000) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CountryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `creditcards`
--

DROP TABLE IF EXISTS `creditcards`;
CREATE TABLE IF NOT EXISTS `creditcards` (
  `CreditCardId` int(11) NOT NULL AUTO_INCREMENT,
  `CreditCardTypeId` int(11) NOT NULL,
  `BankId` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Bin` char(6) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CreditCardId`),
  KEY `FK_CreditCards_Banks` (`BankId`),
  KEY `FK_CreditCards_CreditCardTypes` (`CreditCardTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `creditcards`:
--   `BankId`
--       `banks` -> `BankId`
--   `CreditCardTypeId`
--       `creditcardtypes` -> `CreditCardTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `creditcardtypes`
--

DROP TABLE IF EXISTS `creditcardtypes`;
CREATE TABLE IF NOT EXISTS `creditcardtypes` (
  `CreditCardTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CreditCardTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `CurrencyId` int(11) NOT NULL AUTO_INCREMENT,
  `CurrencyCode` varchar(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CurrencyId`),
  KEY `CurrencyCode` (`CurrencyCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `CustomerId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `IsMallingActive` bit(1) DEFAULT NULL,
  `VirtualMoney` decimal(18,2) DEFAULT NULL,
  `AffiliateSlug` varchar(50) DEFAULT NULL,
  `RefererCustomerId` int(11) DEFAULT NULL,
  `LastInvoiceAddressId` int(11) DEFAULT NULL,
  `LastShippingAddressId` int(11) DEFAULT NULL,
  `LastCreditCardName` varchar(50) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`CustomerId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `failedtransactions`
--

DROP TABLE IF EXISTS `failedtransactions`;
CREATE TABLE IF NOT EXISTS `failedtransactions` (
  `FailedTransactionId` int(11) DEFAULT NULL,
  `OrderId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `geozones`
--

DROP TABLE IF EXISTS `geozones`;
CREATE TABLE IF NOT EXISTS `geozones` (
  `GeoZoneId` int(11) NOT NULL AUTO_INCREMENT,
  `CountryId` int(11) DEFAULT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`GeoZoneId`),
  KEY `FK_GeoZones_Countries` (`CountryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `geozones`:
--   `CountryId`
--       `countries` -> `CountryId`
--

-- --------------------------------------------------------

--
-- Table structure for table `giftcardhistories`
--

DROP TABLE IF EXISTS `giftcardhistories`;
CREATE TABLE IF NOT EXISTS `giftcardhistories` (
  `GiftCardHistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `GiftCardID` int(11) DEFAULT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `BasketAmount` decimal(18,2) DEFAULT NULL,
  `GiftCardAmount` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`GiftCardHistoryId`),
  KEY `FK_GiftCardHistories_Customers` (`CustomerID`),
  KEY `FK_GiftCardHistories_GiftCards` (`GiftCardID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `giftcardhistories`:
--   `CustomerID`
--       `customers` -> `CustomerId`
--   `GiftCardID`
--       `giftcards` -> `GiftCardId`
--

-- --------------------------------------------------------

--
-- Table structure for table `giftcards`
--

DROP TABLE IF EXISTS `giftcards`;
CREATE TABLE IF NOT EXISTS `giftcards` (
  `GiftCardId` int(11) NOT NULL AUTO_INCREMENT,
  `GiftCardTypeId` int(11) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Description` mediumtext,
  `GiftCardCode` varchar(50) DEFAULT NULL,
  `SenderCustomerId` int(11) DEFAULT NULL,
  `SenderName` varchar(100) DEFAULT NULL,
  `SenderPhone` char(10) DEFAULT NULL,
  `SenderEmail` varchar(255) DEFAULT NULL,
  `SenderMessage` mediumtext,
  `RecipientCustomerId` int(11) DEFAULT NULL,
  `RecipientName` varchar(100) DEFAULT NULL,
  `RecipientPhone` char(10) DEFAULT NULL,
  `RecipientEmail` varchar(255) DEFAULT NULL,
  `StartedOn` int(11) DEFAULT NULL,
  `EndedOn` int(11) DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL,
  `IsNotified` bit(1) DEFAULT NULL,
  `IsLimited` bit(1) DEFAULT NULL,
  `MinimumBasketAmount` decimal(18,2) DEFAULT NULL,
  `MinimumBasketItemCount` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`GiftCardId`),
  KEY `FK_GiftCards_GiftCardTypes` (`GiftCardTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `giftcards`:
--   `GiftCardTypeId`
--       `giftcardtypes` -> `GiftCardTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `giftcardtypes`
--

DROP TABLE IF EXISTS `giftcardtypes`;
CREATE TABLE IF NOT EXISTS `giftcardtypes` (
  `GiftCardTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Description` mediumtext,
  `Amount` int(11) DEFAULT NULL,
  `ImageUrl` varchar(1000) DEFAULT NULL,
  `Comment` char(10) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`GiftCardTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logevents`
--

DROP TABLE IF EXISTS `logevents`;
CREATE TABLE IF NOT EXISTS `logevents` (
  `LogEventId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) DEFAULT NULL,
  `Description` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`LogEventId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `LogId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `LogEventId` int(11) DEFAULT NULL,
  `Expression` mediumtext,
  `OldRow` mediumtext,
  `NewRow` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`LogId`),
  KEY `FK_Logs_LogEvents` (`LogEventId`),
  KEY `FK_Logs_User` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `logs`:
--   `LogEventId`
--       `logevents` -> `LogEventId`
--   `UserId`
--       `user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `OrderDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` decimal(18,2) DEFAULT NULL,
  `Amount` decimal(18,2) DEFAULT NULL,
  `DiscountedAmount` decimal(18,2) DEFAULT NULL,
  `TaxRate` decimal(18,2) DEFAULT NULL,
  `TaxAmout` decimal(18,2) DEFAULT NULL,
  `ShippedOn` int(11) DEFAULT NULL,
  `pProductCategoryId` int(11) DEFAULT NULL,
  `pSupplierId` int(11) DEFAULT NULL,
  `pBrandId` int(11) DEFAULT NULL,
  `pProductTypeId` int(11) DEFAULT NULL,
  `pGender` char(1) DEFAULT NULL,
  `pName` varchar(500) DEFAULT NULL,
  `pSupplierDescription` mediumtext,
  `pDescription` mediumtext,
  `pShortDescription` varchar(2000) DEFAULT NULL,
  `pHtmlDescription` varchar(150) DEFAULT NULL,
  `pUrlName` varchar(500) DEFAULT NULL,
  `pMarketPrice` decimal(18,2) DEFAULT NULL,
  `pPriceFromSupplier` decimal(18,2) DEFAULT NULL,
  `pDiscountPercent` int(11) DEFAULT NULL,
  `pCommissionPercent` int(11) DEFAULT NULL,
  `pTaxPercent` decimal(18,0) DEFAULT NULL,
  `pBarcode` varchar(50) DEFAULT NULL,
  `pHasDifferentPriceForOptions` bit(1) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderDetailId`),
  KEY `FK_OrderDetails_Orders` (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `orderdetails`:
--   `OrderId`
--       `orders` -> `OrderId`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) DEFAULT NULL,
  `CampaignId` int(11) DEFAULT NULL,
  `PaymentId` int(11) DEFAULT NULL,
  `OrderStatusId` int(11) DEFAULT NULL,
  `CustomerNote` mediumtext,
  `InvoiceAddressText` mediumtext,
  `InvoicePerson` varchar(500) DEFAULT NULL,
  `InvoiceTaxNumber` varchar(250) DEFAULT NULL,
  `InvoiceTaxOffice` varchar(250) DEFAULT NULL,
  `InvoicedOn` int(11) DEFAULT NULL,
  `PaidAmount` decimal(18,2) DEFAULT NULL,
  `TotalDiscountAmount` decimal(18,2) DEFAULT NULL,
  `TaxAmount` decimal(18,2) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderId`),
  KEY `FK_Orders_OrderStatuses` (`OrderStatusId`),
  KEY `FK_Orders_Payments` (`PaymentId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `orders`:
--   `OrderStatusId`
--       `orderstatuses` -> `OrderStatusId`
--   `PaymentId`
--       `paymenttransactions` -> `PaymentId`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderstatuses`
--

DROP TABLE IF EXISTS `orderstatuses`;
CREATE TABLE IF NOT EXISTS `orderstatuses` (
  `OrderStatusId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `Description` mediumtext,
  `StatusOrder` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`OrderStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttransactions`
--

DROP TABLE IF EXISTS `paymenttransactions`;
CREATE TABLE IF NOT EXISTS `paymenttransactions` (
  `PaymentId` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) NOT NULL,
  `BankId` int(11) NOT NULL,
  `CreditCardTypeId` int(11) NOT NULL,
  `CreditCardId` int(11) NOT NULL,
  `PaymentTypeId` int(11) NOT NULL,
  `VPosOrderId` varchar(50) DEFAULT NULL,
  `ResponseSource` varchar(50) DEFAULT NULL,
  `ResponseCode` char(2) DEFAULT NULL,
  `ResponseReasonCode` char(2) DEFAULT NULL,
  `ResponseMessage` mediumtext,
  `ResponseErrorMsg` mediumtext,
  `ResponseSysErrMsg` mediumtext,
  `RequestMode` mediumtext,
  `RequestChannelcode` mediumtext,
  `RequestVersion` mediumtext,
  `RequestProvUserId` mediumtext,
  `UserId` mediumtext,
  `RequestId` mediumtext,
  `RequestMerchantId` mediumtext,
  `RequestTransactionType` mediumtext,
  `RequestMotoInd` mediumtext,
  `RetrefNum` varchar(50) DEFAULT NULL,
  `AuthCode` varchar(50) NOT NULL,
  `BatchNum` varchar(50) DEFAULT NULL,
  `SequenceNum` varchar(50) DEFAULT NULL,
  `ProvDate` int(11) DEFAULT NULL,
  `MaskedCardNumber` varchar(16) DEFAULT NULL,
  `MaskedCardHolderName` varchar(50) DEFAULT NULL,
  `RequestHashData` char(40) DEFAULT NULL,
  `ResponseHashData` char(40) DEFAULT NULL,
  `PaymentRequestIp` varchar(50) DEFAULT NULL,
  `CurrencyCode` varchar(5) DEFAULT NULL,
  `InstalmentCount` int(11) DEFAULT NULL,
  `IsInstalmentBuying` bit(1) DEFAULT NULL,
  `IsPaidWithBonusPoints` bit(1) DEFAULT NULL,
  `IsCompleted` bit(1) DEFAULT NULL,
  `BonusPointAmount` decimal(18,2) DEFAULT NULL,
  `Amount` decimal(18,2) DEFAULT NULL,
  `TotalAmount` decimal(18,2) NOT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`PaymentId`),
  KEY `FK_Payments_PaymentTypes` (`PaymentTypeId`),
  KEY `FK_Payments_CreditCards` (`CreditCardId`),
  KEY `FK_PaymentTransactions_Currencies` (`CurrencyCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `paymenttransactions`:
--   `CreditCardId`
--       `creditcards` -> `CreditCardId`
--   `PaymentTypeId`
--       `paymenttypes` -> `PaymentTypeId`
--   `CurrencyCode`
--       `currencies` -> `CurrencyCode`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymenttypes`
--

DROP TABLE IF EXISTS `paymenttypes`;
CREATE TABLE IF NOT EXISTS `paymenttypes` (
  `PaymentTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`PaymentTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
CREATE TABLE IF NOT EXISTS `phones` (
  `PhoneId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `Phone` char(10) DEFAULT NULL,
  `IsFax` bit(1) DEFAULT NULL,
  `IsPrimary` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`PhoneId`),
  KEY `FK_Phones_User` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `phones`:
--   `UserId`
--       `user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `productcategories`
--

DROP TABLE IF EXISTS `productcategories`;
CREATE TABLE IF NOT EXISTS `productcategories` (
  `ProductCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `ParentProductCategoryId` int(11) DEFAULT NULL,
  `Name` varchar(1000) DEFAULT NULL,
  `Description` mediumtext,
  `ShortDescription` varchar(2000) DEFAULT NULL,
  `HtmlDecription` mediumtext,
  `AvatarUrl` varchar(500) DEFAULT NULL,
  `IconUrl` varchar(500) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductCategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productmedias`
--

DROP TABLE IF EXISTS `productmedias`;
CREATE TABLE IF NOT EXISTS `productmedias` (
  `ProductMediaId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `SmallImageUrl` varchar(1000) DEFAULT NULL,
  `ImageUrl` varchar(1000) DEFAULT NULL,
  `ZoomImageUrl` varchar(1000) DEFAULT NULL,
  `EmbedCode` mediumtext,
  `HtmlAlt` varchar(100) DEFAULT NULL,
  `HtmlTitle` varchar(100) DEFAULT NULL,
  `FeaturedText` varchar(2000) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT NULL,
  `IsVideo` bit(1) DEFAULT NULL,
  `IsPrimary` bit(1) DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductMediaId`),
  KEY `FK_ProductMedias_Products` (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productmedias`:
--   `ProductId`
--       `products` -> `ProductId`
--

-- --------------------------------------------------------

--
-- Table structure for table `productoptioncombinations`
--

DROP TABLE IF EXISTS `productoptioncombinations`;
CREATE TABLE IF NOT EXISTS `productoptioncombinations` (
  `ProductOptionCombinationId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId1` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId2` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId3` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId4` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId5` int(11) DEFAULT NULL,
  `Barcode` varchar(50) DEFAULT NULL,
  `Price` decimal(18,2) DEFAULT NULL,
  `PriceMarket` decimal(18,2) DEFAULT NULL,
  `PriceSupplier` decimal(18,2) DEFAULT NULL,
  `CampaignStock` decimal(18,2) DEFAULT NULL,
  `ActualStock` decimal(18,2) DEFAULT NULL,
  `StockWarningLevel` decimal(18,2) DEFAULT NULL,
  `StockUnitId` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductOptionCombinationId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productoptiongroupmembers`
--

DROP TABLE IF EXISTS `productoptiongroupmembers`;
CREATE TABLE IF NOT EXISTS `productoptiongroupmembers` (
  `ProductOptionGroupMemberId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductOptionGroupId` int(11) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductOptionGroupMemberId`),
  KEY `FK_ProductOptionGroupMembers_ProductOptionGroups` (`ProductOptionGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productoptiongroupmembers`:
--   `ProductOptionGroupId`
--       `productoptiongroups` -> `ProductOptionGroupId`
--

-- --------------------------------------------------------

--
-- Table structure for table `productoptiongroups`
--

DROP TABLE IF EXISTS `productoptiongroups`;
CREATE TABLE IF NOT EXISTS `productoptiongroups` (
  `ProductOptionGroupId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductOptionGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productoptionprices`
--

DROP TABLE IF EXISTS `productoptionprices`;
CREATE TABLE IF NOT EXISTS `productoptionprices` (
  `ProductOptionPriceId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId1` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId2` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId3` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId4` int(11) DEFAULT NULL,
  `Price` decimal(18,2) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductOptionPriceId`),
  KEY `FK_ProductOptionPrices_Products` (`ProductId`),
  KEY `FK_ProductOptionPrices_ProductOptionGroupMembers3` (`ProductOptionGroupMemberId4`),
  KEY `FK_ProductOptionPrices_ProductOptionGroupMembers2` (`ProductOptionGroupMemberId2`),
  KEY `FK_ProductOptionPrices_ProductOptionGroupMembers1` (`ProductOptionGroupMemberId3`),
  KEY `FK_ProductOptionPrices_ProductOptionGroupMembers` (`ProductOptionGroupMemberId1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productoptionprices`:
--   `ProductOptionGroupMemberId4`
--       `productoptiongroupmembers` -> `ProductOptionGroupMemberId`
--   `ProductId`
--       `products` -> `ProductId`
--   `ProductOptionGroupMemberId1`
--       `productoptiongroupmembers` -> `ProductOptionGroupMemberId`
--   `ProductOptionGroupMemberId3`
--       `productoptiongroupmembers` -> `ProductOptionGroupMemberId`
--   `ProductOptionGroupMemberId2`
--       `productoptiongroupmembers` -> `ProductOptionGroupMemberId`
--

-- --------------------------------------------------------

--
-- Table structure for table `productoptions`
--

DROP TABLE IF EXISTS `productoptions`;
CREATE TABLE IF NOT EXISTS `productoptions` (
  `ProductOptionId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `ProductOptionGroupId` int(11) DEFAULT NULL,
  `ProductOptionGroupMemberId` int(11) DEFAULT NULL,
  `Value` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductOptionId`),
  KEY `FK_ProductOptions_Products` (`ProductId`),
  KEY `FK_ProductOptions_ProductOptionGroupMembers` (`ProductOptionGroupMemberId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productoptions`:
--   `ProductOptionGroupMemberId`
--       `productoptiongroupmembers` -> `ProductOptionGroupMemberId`
--   `ProductId`
--       `products` -> `ProductId`
--

-- --------------------------------------------------------

--
-- Table structure for table `productpricehistories`
--

DROP TABLE IF EXISTS `productpricehistories`;
CREATE TABLE IF NOT EXISTS `productpricehistories` (
  `ProductPriceHistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductId` int(11) DEFAULT NULL,
  `ProductOptionCombinationId` int(11) DEFAULT NULL,
  `ProductOptionPriceId` int(11) DEFAULT NULL,
  `OldPrice` decimal(18,2) DEFAULT NULL,
  `NewPrice` decimal(18,2) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductPriceHistoryId`),
  KEY `FK_ProductPriceHistories_Products` (`ProductId`),
  KEY `FK_ProductPriceHistories_ProductOptionPrices` (`ProductOptionPriceId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productpricehistories`:
--   `ProductOptionPriceId`
--       `productoptionprices` -> `ProductOptionPriceId`
--   `ProductId`
--       `products` -> `ProductId`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `ProductId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCategoryId` int(11) DEFAULT NULL,
  `SupplierId` int(11) DEFAULT NULL,
  `BrandId` int(11) DEFAULT NULL,
  `ProductTypeId` int(11) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `SupplierDescription` mediumtext,
  `Description` mediumtext,
  `ShortDescriptioon` varchar(2000) DEFAULT NULL,
  `HtmlDescription` varchar(150) DEFAULT NULL,
  `UrlName` varchar(500) DEFAULT NULL,
  `DiscountPercent` int(11) DEFAULT NULL,
  `CommissionPercent` int(11) DEFAULT NULL,
  `TaxPercent` decimal(18,0) DEFAULT NULL,
  `Price` decimal(18,2) DEFAULT NULL,
  `PriceMarket` decimal(18,2) DEFAULT NULL,
  `PriceSupplier` decimal(18,2) DEFAULT NULL,
  `MaximumPurchaseCount` int(11) DEFAULT NULL,
  `IsActive` bit(1) DEFAULT NULL,
  `IsFeatured` bit(1) DEFAULT NULL,
  `IsOnVote` bit(1) DEFAULT NULL,
  `VoteCount` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `PublishedOn` int(11) DEFAULT NULL,
  `UpdateOn` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductId`),
  KEY `FK_Products_ProductTypes` (`ProductTypeId`),
  KEY `FK_Products_ProductCategories` (`ProductCategoryId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `products`:
--   `ProductCategoryId`
--       `productcategories` -> `ProductCategoryId`
--   `ProductTypeId`
--       `producttypes` -> `ProductTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttypes`
--

DROP TABLE IF EXISTS `producttypes`;
CREATE TABLE IF NOT EXISTS `producttypes` (
  `ProductTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCategoryId` int(11) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productvotehistories`
--

DROP TABLE IF EXISTS `productvotehistories`;
CREATE TABLE IF NOT EXISTS `productvotehistories` (
  `ProductVoteHistoryId` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Message` mediumtext,
  `IsLiked` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ProductVoteHistoryId`),
  KEY `FK_ProductVoteHistories_Products` (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `productvotehistories`:
--   `ProductId`
--       `products` -> `ProductId`
--

-- --------------------------------------------------------

--
-- Table structure for table `queuedemails`
--

DROP TABLE IF EXISTS `queuedemails`;
CREATE TABLE IF NOT EXISTS `queuedemails` (
  `QueuedEmailID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerId` int(11) DEFAULT NULL,
  `SendingTo` varchar(255) DEFAULT NULL,
  `ToName` varchar(500) DEFAULT NULL,
  `Priority` int(11) DEFAULT NULL,
  `SendingFrom` varchar(255) DEFAULT NULL,
  `FromName` varchar(500) DEFAULT NULL,
  `Cc` varchar(255) DEFAULT NULL,
  `Bcc` varchar(255) DEFAULT NULL,
  `Subject` varchar(500) DEFAULT NULL,
  `Body` mediumtext,
  `SendTries` int(11) DEFAULT NULL,
  `SentOn` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`QueuedEmailID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `refundtransactions`
--

DROP TABLE IF EXISTS `refundtransactions`;
CREATE TABLE IF NOT EXISTS `refundtransactions` (
  `RefundTransactionId` int(11) DEFAULT NULL,
  `OrderId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `SettingId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Value` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`SettingId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
CREATE TABLE IF NOT EXISTS `shippings` (
  `ShippingId` int(11) NOT NULL AUTO_INCREMENT,
  `OrderId` int(11) DEFAULT NULL,
  `OrderDetailId` int(11) DEFAULT NULL,
  `ShippingAddressText` mediumtext,
  `ShippingPerson` varchar(500) DEFAULT NULL,
  `ShippingNumber` varchar(100) DEFAULT NULL,
  `ShippingTypeId` int(11) DEFAULT NULL,
  `ShippingStatusId` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ShippingId`),
  KEY `FK_Shippings_ShippingTypes` (`ShippingTypeId`),
  KEY `FK_Shippings_ShippingStatuses` (`ShippingStatusId`),
  KEY `FK_Shippings_Orders` (`OrderId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `shippings`:
--   `OrderId`
--       `orders` -> `OrderId`
--   `ShippingStatusId`
--       `shippingstatuses` -> `ShippingStatusId`
--   `ShippingTypeId`
--       `shippingtypes` -> `ShippingTypeId`
--

-- --------------------------------------------------------

--
-- Table structure for table `shippingstatuses`
--

DROP TABLE IF EXISTS `shippingstatuses`;
CREATE TABLE IF NOT EXISTS `shippingstatuses` (
  `ShippingStatusId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) NOT NULL,
  `Description` mediumtext,
  `StatusOrder` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ShippingStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shippingtypes`
--

DROP TABLE IF EXISTS `shippingtypes`;
CREATE TABLE IF NOT EXISTS `shippingtypes` (
  `ShippingTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`ShippingTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stockunits`
--

DROP TABLE IF EXISTS `stockunits`;
CREATE TABLE IF NOT EXISTS `stockunits` (
  `StockUnitId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`StockUnitId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `SupplierId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) DEFAULT NULL,
  `ShortName` varchar(100) DEFAULT NULL,
  `Description` mediumtext,
  `Website` varchar(500) DEFAULT NULL,
  `LogoUrl` varchar(1000) DEFAULT NULL,
  `TaxOffice` varchar(1000) DEFAULT NULL,
  `TaxNumber` varchar(1000) DEFAULT NULL,
  `PrimaryPhone` char(10) DEFAULT NULL,
  `PrimaryEmail` varchar(255) DEFAULT NULL,
  `PrimaryPersonName` varchar(100) DEFAULT NULL,
  `PrimaryPersonId` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`SupplierId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suppliersbrands`
--

DROP TABLE IF EXISTS `suppliersbrands`;
CREATE TABLE IF NOT EXISTS `suppliersbrands` (
  `SuppliersBrandId` int(11) NOT NULL AUTO_INCREMENT,
  `BrandId` int(11) DEFAULT NULL,
  `SupplierId` int(11) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` char(10) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`SuppliersBrandId`),
  KEY `FK_SuppliersBrands_Suppliers` (`SupplierId`),
  KEY `FK_SuppliersBrands_Brands` (`BrandId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `suppliersbrands`:
--   `SupplierId`
--       `suppliers` -> `SupplierId`
--   `BrandId`
--       `brands` -> `BrandId`
--

-- --------------------------------------------------------

--
-- Table structure for table `supplierspeople`
--

DROP TABLE IF EXISTS `supplierspeople`;
CREATE TABLE IF NOT EXISTS `supplierspeople` (
  `SuppliersPeopleId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `SupplierId` int(11) DEFAULT NULL,
  `Department` varchar(500) DEFAULT NULL,
  `IsPrimary` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`SuppliersPeopleId`),
  KEY `FK_SuppliersPeople_Suppliers` (`SupplierId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `supplierspeople`:
--   `SupplierId`
--       `suppliers` -> `SupplierId`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserTypeId` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `Names` varchar(50) DEFAULT NULL,
  `PreferredName` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `Birthday` int(11) DEFAULT '11',
  `Website` varchar(255) DEFAULT NULL,
  `FacebookId` varchar(100) DEFAULT NULL,
  `TwitterId` varchar(100) DEFAULT NULL,
  `IsLikedFanPage` varchar(1) DEFAULT NULL,
  `PhotoUrl` varchar(1000) DEFAULT NULL,
  `IsPersonal` varchar(1) DEFAULT NULL,
  `IdentityNumber` varchar(11) DEFAULT NULL,
  `TaxNumber` varchar(250) DEFAULT NULL,
  `TaxOffice` varchar(250) DEFAULT NULL,
  `Comment` text,
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `lastLogin` int(11) DEFAULT '11',
  `previousLogin` int(11) DEFAULT '11',
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT '11',
  `created_at` int(11) NOT NULL DEFAULT '11',
  `updated_at` int(11) NOT NULL DEFAULT '11',
  `deleted_at` int(11) DEFAULT '11',
  PRIMARY KEY (`id`),
  KEY `FK_User_UserTypes` (`UserTypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `user`:
--   `UserTypeId`
--       `usertypes` -> `UserTypeId`
--

--
-- NOTICE remember to signup so you can log in as the superuser/admin
--

-- --------------------------------------------------------

--
-- Table structure for table `userrestdata`
--

DROP TABLE IF EXISTS `userrestdata`;
CREATE TABLE IF NOT EXISTS `userrestdata` (
  `UserDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) DEFAULT NULL,
  `FacebookData` mediumtext,
  `TwitterData` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserDetailId`),
  KEY `FK_UserRestData_Users` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `userrestdata`:
--   `UserId`
--       `user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

DROP TABLE IF EXISTS `usertypes`;
CREATE TABLE IF NOT EXISTS `usertypes` (
  `UserTypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Description` mediumtext,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`UserTypeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

DROP TABLE IF EXISTS `warehouses`;
CREATE TABLE IF NOT EXISTS `warehouses` (
  `WarehouseId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Description` mediumtext,
  `FullAddress` mediumtext,
  `IsActive` bit(1) DEFAULT NULL,
  `Comment` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `LastUpdatedBy` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`WarehouseId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `FK_Addresses_User` FOREIGN KEY (`UserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Addresses_AddressTypes` FOREIGN KEY (`AddressTypeId`) REFERENCES `addresstypes` (`AddressTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD CONSTRAINT `FK_Affilates_Customers` FOREIGN KEY (`CustomerId`) REFERENCES `customers` (`CustomerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campaignproducts`
--
ALTER TABLE `campaignproducts`
  ADD CONSTRAINT `FK_CampaignProducts_Campaigns` FOREIGN KEY (`CampaignId`) REFERENCES `campaigns` (`CampaignId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `FK_Campaigns_CampaignTypes` FOREIGN KEY (`CampaignTypeId`) REFERENCES `campaigntypes` (`CampaignTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `FK_Cities_GeoZones` FOREIGN KEY (`GeoZoneId`) REFERENCES `geozones` (`GeoZoneId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `counties`
--
ALTER TABLE `counties`
  ADD CONSTRAINT `FK_Counties_Cities` FOREIGN KEY (`CityId`) REFERENCES `cities` (`CityId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `creditcards`
--
ALTER TABLE `creditcards`
  ADD CONSTRAINT `FK_CreditCards_Banks` FOREIGN KEY (`BankId`) REFERENCES `banks` (`BankId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_CreditCards_CreditCardTypes` FOREIGN KEY (`CreditCardTypeId`) REFERENCES `creditcardtypes` (`CreditCardTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `geozones`
--
ALTER TABLE `geozones`
  ADD CONSTRAINT `FK_GeoZones_Countries` FOREIGN KEY (`CountryId`) REFERENCES `countries` (`CountryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `giftcardhistories`
--
ALTER TABLE `giftcardhistories`
  ADD CONSTRAINT `FK_GiftCardHistories_Customers` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_GiftCardHistories_GiftCards` FOREIGN KEY (`GiftCardID`) REFERENCES `giftcards` (`GiftCardId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `giftcards`
--
ALTER TABLE `giftcards`
  ADD CONSTRAINT `FK_GiftCards_GiftCardTypes` FOREIGN KEY (`GiftCardTypeId`) REFERENCES `giftcardtypes` (`GiftCardTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `FK_Logs_LogEvents` FOREIGN KEY (`LogEventId`) REFERENCES `logevents` (`LogEventId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Logs_User` FOREIGN KEY (`UserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `FK_OrderDetails_Orders` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_Orders_OrderStatuses` FOREIGN KEY (`OrderStatusId`) REFERENCES `orderstatuses` (`OrderStatusId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Orders_Payments` FOREIGN KEY (`PaymentId`) REFERENCES `paymenttransactions` (`PaymentId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `paymenttransactions`
--
ALTER TABLE `paymenttransactions`
  ADD CONSTRAINT `FK_Payments_CreditCards` FOREIGN KEY (`CreditCardId`) REFERENCES `creditcards` (`CreditCardId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Payments_PaymentTypes` FOREIGN KEY (`PaymentTypeId`) REFERENCES `paymenttypes` (`PaymentTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_PaymentTransactions_Currencies` FOREIGN KEY (`CurrencyCode`) REFERENCES `currencies` (`CurrencyCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `FK_Phones_User` FOREIGN KEY (`UserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productmedias`
--
ALTER TABLE `productmedias`
  ADD CONSTRAINT `FK_ProductMedias_Products` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productoptiongroupmembers`
--
ALTER TABLE `productoptiongroupmembers`
  ADD CONSTRAINT `FK_ProductOptionGroupMembers_ProductOptionGroups` FOREIGN KEY (`ProductOptionGroupId`) REFERENCES `productoptiongroups` (`ProductOptionGroupId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productoptionprices`
--
ALTER TABLE `productoptionprices`
  ADD CONSTRAINT `FK_ProductOptionPrices_ProductOptionGroupMembers3` FOREIGN KEY (`ProductOptionGroupMemberId4`) REFERENCES `productoptiongroupmembers` (`ProductOptionGroupMemberId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductOptionPrices_Products` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductOptionPrices_ProductOptionGroupMembers` FOREIGN KEY (`ProductOptionGroupMemberId1`) REFERENCES `productoptiongroupmembers` (`ProductOptionGroupMemberId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductOptionPrices_ProductOptionGroupMembers1` FOREIGN KEY (`ProductOptionGroupMemberId3`) REFERENCES `productoptiongroupmembers` (`ProductOptionGroupMemberId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductOptionPrices_ProductOptionGroupMembers2` FOREIGN KEY (`ProductOptionGroupMemberId2`) REFERENCES `productoptiongroupmembers` (`ProductOptionGroupMemberId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productoptions`
--
ALTER TABLE `productoptions`
  ADD CONSTRAINT `FK_ProductOptions_ProductOptionGroupMembers` FOREIGN KEY (`ProductOptionGroupMemberId`) REFERENCES `productoptiongroupmembers` (`ProductOptionGroupMemberId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductOptions_Products` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productpricehistories`
--
ALTER TABLE `productpricehistories`
  ADD CONSTRAINT `FK_ProductPriceHistories_ProductOptionPrices` FOREIGN KEY (`ProductOptionPriceId`) REFERENCES `productoptionprices` (`ProductOptionPriceId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ProductPriceHistories_Products` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_Products_ProductCategories` FOREIGN KEY (`ProductCategoryId`) REFERENCES `productcategories` (`ProductCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Products_ProductTypes` FOREIGN KEY (`ProductTypeId`) REFERENCES `producttypes` (`ProductTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productvotehistories`
--
ALTER TABLE `productvotehistories`
  ADD CONSTRAINT `FK_ProductVoteHistories_Products` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `FK_Shippings_Orders` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Shippings_ShippingStatuses` FOREIGN KEY (`ShippingStatusId`) REFERENCES `shippingstatuses` (`ShippingStatusId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Shippings_ShippingTypes` FOREIGN KEY (`ShippingTypeId`) REFERENCES `shippingtypes` (`ShippingTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `suppliersbrands`
--
ALTER TABLE `suppliersbrands`
  ADD CONSTRAINT `FK_SuppliersBrands_Suppliers` FOREIGN KEY (`SupplierId`) REFERENCES `suppliers` (`SupplierId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_SuppliersBrands_Brands` FOREIGN KEY (`BrandId`) REFERENCES `brands` (`BrandId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplierspeople`
--
ALTER TABLE `supplierspeople`
  ADD CONSTRAINT `FK_SuppliersPeople_Suppliers` FOREIGN KEY (`SupplierId`) REFERENCES `suppliers` (`SupplierId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_User_UserTypes` FOREIGN KEY (`UserTypeId`) REFERENCES `usertypes` (`UserTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `userrestdata`
--
ALTER TABLE `userrestdata`
  ADD CONSTRAINT `FK_UserRestData_Users` FOREIGN KEY (`UserId`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
