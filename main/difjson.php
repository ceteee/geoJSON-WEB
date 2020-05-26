
                    map.on('load', function() {
                  map.addSource('national-park', {
                  'type': 'geojson',
                  'data': {
                  'type': 'FeatureCollection',
                  'features': [
                  {
                  'type': 'Feature',
                  'geometry': {
                  'type': 'Polygon',
                  'coordinates': [
                  [
                  [98.72683,3.80100],
                  [98.6961,3.73482],
                  [98.71644,3.69704],
                  [98.69558,3.65926],
                  [98.72288,3.64375],
                  [98.72614,3.61728],
                  [98.73078,3.56356],
                  [98.74163,3.54533],
                  [98.74151,3.52848],
                  [98.66984,3.52423],
                  [98.59921,3.48972],
                  [98.5976,3.54054],
                  [98.58483,3.59623],
                  [98.59679,3.63958],
                  [98.63924,3.71668],
                  [98.66907,3.74821],
                  [98.66708,3.76834],
                  [98.68071,3.7871],
                  [98.68702,3.78872],
                  [98.70269,3.80123]
                  ]
                  ]
                  }
                  },
                            {
                            'type': 'Feature',
                            'geometry': {
                            'type': 'Point',
                            'coordinates': [98.6380919, 3.6521704]
                            }
                            }

                  ]
                  }
                  });
                  
                  map.addLayer({
                  'id': 'park-boundary',
                  'type': 'fill',
                  'source': 'national-park',
                  'paint': {
                  'fill-color': '#888888',
                  'fill-opacity': 0.4
                  },
                  'filter': ['==', '$type', 'Polygon']
                  });
                  
                  map.addLayer({
                  'id': 'park-volcanoes',
                  'type': 'circle',
                  'source': 'national-park',
                  'paint': {
                  'circle-radius': 6,
                  'circle-color': '#B42222'
                  },
                  'filter': ['==', '$type', 'Point']
                  });
                });