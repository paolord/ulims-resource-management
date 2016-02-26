DELETE FROM `accesslist` WHERE `label`='Inventory';

DELETE FROM `authitem` WHERE `name`='Inventory.Inventories.View';
DELETE FROM `authitem` WHERE `name`='Inventory.Inventories.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.Inventories.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.Inventories.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.Inventories.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.Stocks.View';
DELETE FROM `authitem` WHERE `name`='Inventory.Stocks.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.Stocks.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.Stocks.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.Stocks.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.Locations.View';
DELETE FROM `authitem` WHERE `name`='Inventory.Locations.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.Locations.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.Locations.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.Locations.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.Suppliers.View';
DELETE FROM `authitem` WHERE `name`='Inventory.Suppliers.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.Suppliers.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.Suppliers.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.Suppliers.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.Manufacturers.View';
DELETE FROM `authitem` WHERE `name`='Inventory.Manufacturers.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.Manufacturers.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.Manufacturers.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.Manufacturers.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.ContainerTypes.View';
DELETE FROM `authitem` WHERE `name`='Inventory.ContainerTypes.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.ContainerTypes.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.ContainerTypes.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.ContainerTypes.Admin';

DELETE FROM `authitem` WHERE `name`='Inventory.UnitTypes.View';
DELETE FROM `authitem` WHERE `name`='Inventory.UnitTypes.Create';
DELETE FROM `authitem` WHERE `name`='Inventory.UnitTypes.Update';
DELETE FROM `authitem` WHERE `name`='Inventory.UnitTypes.Delete';
DELETE FROM `authitem` WHERE `name`='Inventory.UnitTypes.Admin';


DELETE FROM `authitemchild` WHERE `child`='Inventory.Inventories.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Inventories.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Inventories.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Inventories.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Inventories.Admin';

DELETE FROM `authitemchild` WHERE `child`='Inventory.Stocks.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Stocks.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Stocks.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Stocks.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Stocks.Admin';

DELETE FROM `authitemchild` WHERE `child`='Inventory.Locations.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Locations.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Locations.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Locations.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Locations.Admin';

DELETE FROM `authitemchild` WHERE `child`='Inventory.Suppliers.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Suppliers.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Suppliers.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Suppliers.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.Suppliers.Admin';

DELETE FROM `authitemchild` WHERE `child`='Inventory.ContainerTypes.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.ContainerTypes.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.ContainerTypes.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.ContainerTypes.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.ContainerTypes.Admin';

DELETE FROM `authitemchild` WHERE `child`='Inventory.UnitTypes.View';
DELETE FROM `authitemchild` WHERE `child`='Inventory.UnitTypes.Create';
DELETE FROM `authitemchild` WHERE `child`='Inventory.UnitTypes.Update';
DELETE FROM `authitemchild` WHERE `child`='Inventory.UnitTypes.Delete';
DELETE FROM `authitemchild` WHERE `child`='Inventory.UnitTypes.Admin';