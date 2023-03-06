export default defineComponent({
    props: {
      width: {
        type: String,
        default: "24px"
      } 
    },
    render: (props: any) => {
      return (
        <svg
        width = { props.width }
        height= { props.width }
        viewBox="0 0 24 24"
        role="img"
        xmlns="http://www.w3.org/2000/svg"
        aria-labelledby="chevronRightIconTitle"
        stroke="#000000"
        strokeWidth={2}
        strokeLinecap="round"
        strokeLinejoin="round"
        fill="none"
        color="#000000"
        {...props}
      >
        <title id="chevronRightIconTitle">{"Chevron Right"}</title>
        <polyline points="10 6 16 12 10 18 10 18" />
      </svg>
      )
    }
  })