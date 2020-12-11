import React from 'react'

const GenericTable = props => {
    const dataList = props.data;
    const columns = props.columns
    return (
        <>
            <table>
                {
                    dataList && dataList.length ?
                        (
                            <>
                                <thead>
                                    <tr>
                                        {
                                            columns.map((col, index) => <th key={index}>{col}</th>)
                                        }
                                    </tr>
                                </thead>
                                <tbody>
                                    {dataList.map(data => (
                                        <tr key={data[props.primaryKey]}>
                                            {
                                                props.rowsKeys.map((key, index) =>
                                                    <td key={index}>{data[key]}</td>
                                                )
                                            }
                                        </tr>
                                    ))
                                    }
                                </tbody>
                            </>
                        ) : (
                            <tbody>
                                <tr>
                                    <td colSpan={3}> No Data in Table</td>
                                </tr>
                            </tbody>
                        )
                }
            </table>
        </>
    )
}

export default GenericTable