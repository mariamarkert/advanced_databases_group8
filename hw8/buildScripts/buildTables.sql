DROP TABLE zips;
DROP TABLE states;
DROP TABLE regions;
@buildScripts/createRegionsTable
@buildScripts/createStatesTable
@buildScripts/createZipsTable
