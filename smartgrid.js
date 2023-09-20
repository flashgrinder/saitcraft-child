module.exports = {
	filename: "_smart-grid",
	outputStyle: 'scss',
	columns: 12,
	offset: "20px",
	container: {
		maxWidth: "1350px",
		fields: "12px"
	},
	breakPoints: {
		large: {
            width: '1200px',
        },
        tablet: {
                width: '1024px'
        },
        tabletSM: {
                width: '991px'
        },
        mobile: {
                width: "767px",
                offset: "10px",
        },
        mobileXS: {
                width: "576px",
                fields: "10px"
        },
        mobileXSS: {
                width: "400px"
        }
	},
	mobileFirst: false
};