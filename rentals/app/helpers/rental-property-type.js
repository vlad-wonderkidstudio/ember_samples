import { helper } from '@ember/component/helper';

const communityPropertyTypes = [
  'Condo',
  'Townhouse',
  'Apartment'
];


export function rentalPropertyType([propertyType]) {
  if ( communityPropertyTypes.indexOf(propertyType) != -1 ) {
    return 'Community';
  } else {
    return 'Standalone';
  }

  
}

export default helper(rentalPropertyType);
